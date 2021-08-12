FROM dysnomia/net-sdk-5-0 AS build-env
WORKDIR /app

ARG SONAR_HOST
ARG SONAR_TOKEN
ARG PORTFOLIO_RECAPTCHA_SECRETKEY
ARG PORTFOLIO_RECAPTCHA_SITEKEY
ARG MAIL_SERVER
ARG MAIL_ADDRESS
ARG MAIL_PASSWORD

# Build Project
COPY . ./

RUN jq ".RecaptchaSettings.SecretKey = \"$PORTFOLIO_RECAPTCHA_SECRETKEY\"" Portfolio/appsettings.json > tmp.appsettings.json && mv tmp.appsettings.json Portfolio/appsettings.json
RUN jq ".RecaptchaSettings.SiteKey = \"$PORTFOLIO_RECAPTCHA_SITEKEY\"" Portfolio/appsettings.json > tmp.appsettings.json && mv tmp.appsettings.json Portfolio/appsettings.json
RUN jq ".AppSettings.MailServer = \"$MAIL_SERVER\"" Dysnomia.Website.WebApp/appsettings.json > tmp.appsettings.json && mv tmp.appsettings.json Dysnomia.Website.WebApp/appsettings.json
RUN jq ".AppSettings.MailAddress = \"$MAIL_ADDRESS\"" Dysnomia.Website.WebApp/appsettings.json > tmp.appsettings.json && mv tmp.appsettings.json Dysnomia.Website.WebApp/appsettings.json
RUN jq ".AppSettings.MailPassword = \"$MAIL_PASSWORD\"" Dysnomia.Website.WebApp/appsettings.json > tmp.appsettings.json && mv tmp.appsettings.json Dysnomia.Website.WebApp/appsettings.json

RUN dotnet sonarscanner begin /k:"portfolio" /d:sonar.host.url="$SONAR_HOST" /d:sonar.login="$SONAR_TOKEN" /d:sonar.cs.opencover.reportsPaths="**/coverage.opencover.xml" /d:sonar.coverage.exclusions="**Test*.cs"
RUN dotnet restore Portfolio.sln --ignore-failed-sources /p:EnableDefaultItems=false
RUN dotnet publish Portfolio.sln --no-restore -c Release -o out
RUN dotnet test /p:CollectCoverage=true /p:CoverletOutputFormat=opencover
RUN dotnet sonarscanner end /d:sonar.login="$SONAR_TOKEN"

# Build runtime image
FROM mcr.microsoft.com/dotnet/aspnet:5.0
WORKDIR /app
COPY --from=build-env /app/out .
ENTRYPOINT ["dotnet", "Portfolio.dll"]