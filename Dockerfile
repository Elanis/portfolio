FROM dysnomia/netcore-sdk-3-0 AS build-env
WORKDIR /app

# Build Project
COPY . ./
RUN dotnet sonarscanner begin /k:"portfolio" /d:sonar.host.url="***REMOVED***" /d:sonar.login="***REMOVED***"
RUN dotnet restore Portfolio.sln
RUN dotnet publish Portfolio.sln -c Release -o out
RUN dotnet sonarscanner end /d:sonar.login="***REMOVED***"

# Build runtime image
FROM mcr.microsoft.com/dotnet/core/aspnet:3.0
WORKDIR /app
COPY --from=build-env /app/out .
ENTRYPOINT ["dotnet", "Portfolio.dll"]