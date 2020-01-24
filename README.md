# HubSpot-php Companies sample app

This is a sample app for the [hubspot-php-3 SDK](https://github.com/hubspot/hubspot-php-3). Currently, this app focuses on demonstrating the functionality of [Companies API](https://developers.hubspot.com/docs-beta/crm/companies) endpoints and their related actions.

Please see the documentation on [How do I create an app in HubSpot?](https://developers.hubspot.com/docs/faq/how-do-i-create-an-app-in-hubspot)

### HubSpot Public API endpoints used in this application

  - [Companies](https://developers.hubspot.com/docs-beta/crm/companies)
  - [Associations](https://developers.hubspot.com/docs-beta/crm/associations)
  - [Contacts](https://developers.hubspot.com/docs-beta/crm/contacts)
  - [OAuth](https://developers.hubspot.com/docs-beta/working-with-oauth)

### Setup App

Make sure you have [Docker Compose](https://docs.docker.com/compose/) installed.

### Configure

1. Copy .env.template to .env
2. Specify authorization data in .env:
    
    - Paste your HubSpot API Key as the value for HUBSPOT_API_KEY
    
    or
    
    - Paste HUBSPOT_CLIENT_ID and HUBSPOT_CLIENT_SECRET for OAuth

### Running

The best way to run this project (with the least configuration), is using docker compose.  Change to the webroot and start it

```bash
docker-compose up --build web
```
You should now be able to navigate to [http://localhost:8999](http://localhost:8999) and use the application.

### Running tests

Run tests with codecept

```bash
docker-compose run codecept run
```
