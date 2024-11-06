
# GraphQL E-Com CRUD System

A simple E-com CRUD System built with Laravel and GraphQL using Lighthouse. This system allows users to browse products, manage categories and brands, and perform CRUD operations on products, categories, and brands via GraphQL queries and mutations.




## Table of Contents Feature

- User & Users List.
- CRUD operations for Products, Categories, and Brands.
- GraphQL support for querying and mutating data.
- Light house pannel for managing categories, brands, and products API's.




## Technologies Used



**Backend:** Laravel-11

**GraphQL Server:** Lighthouse

**Database:** MySQL

**Email:** Laravel Queue, Mail, Cron Job


## Installation Requirement

Prerequisites Ensure you have the following installed

- PHP 8.2+

- Composer 

- MySQL


## Installation

Steps 1 : Clone the repository

```bash
  https://github.com/ShihabMahmod/simple-graphql-app-for-beginnersit

```


Steps 2 : Goto Project

```bash
  cd simple-graphql-app-for-beginnersit

```

Steps 3 : Set Up Environment Variables

```bash
  cp .env.example .env

```


Steps 4 : php artisan serve

```bash
  cp .env.example .env

```

Steps 5 : Queue Configuration

```bash
  php artisan migrate

```


Steps 6 : Generate Application  Key

```bash
  php artisan key:generate

```

Steps 7 : Set Up Lighthouse GraphQL

```bash
  composer require nuwave/lighthouse
  php artisan vendor:publish --provider="Nuwave\Lighthouse\LighthouseServiceProvider"

```


Steps 8 : Start server

```bash
  php artisan server

```
    
## GraphQL Usage Guide

**Create Event Reminder:**

You can test your GraphQL queries and mutations by visiting the GraphiQL

```bash
  http://localhost:8000/graphiql

```

*Start Exploring GraphQL Queries and Mutations*

*Fetch All Categories*
```bash
 query Query{
  categories {
    name,
    slug
  }
}
```

*Fetch Single Category*
```bash
 query Query{
  categories(id: 1) {
    name,
    slug
  }
}
```

*Create Category*
```bash
mutation {
  createCategory(
    input: {
    name: "Test-category",
    slug:"test-category"
  }),{
   id,
    name,
    slug
  }
}
```
*Update Category*
```bash
mutation {
  updateCategory(
    input: {
    id: 25
    name: "Test-category update",
    slug:"test-category update"
  }),{
   id,
    name,
    slug
  }
}
```
*Delete Category*
```bash
mutation {
  deleteCategory(id: 1){
    name
    }
}
```

You can use same process for brand and product

## Next Steps
For those ready to dive deeper, consider expanding this project by adding:

- Authentication with Laravel Sanctum or Passport.
- Advanced queries and filtering for products.
- Frontend integration with a client like React or Vue using Apollo GraphQL.
- For more details, refer to the Laravel and Lighthouse documentation. Happy coding!

                                        Thank You


