
## About Project

Company list app

## Documentation
First:
1. ddev start
2. ddev mysql
3. ddev artisan migrate

Factory use for dummy data:
1. ddev artisan tinker
2. \App\Models\companies::factory()->count(20)->create();


## ToDo

1. search for company in home page
2. form validation
3. registration for user
4. make it that the user can edit only his added companies
