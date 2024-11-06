
# GraphQL E-Com CRUD System(GraphQL Layer + Service Layer)

In this setup, GraphQL acts as a flexible query language and API layer, allowing clients to specify exactly what data they need. The service layer sits between GraphQL and the database, handling business logic and data retrieval. This structure provides clear separation of concerns

- GraphQL Layer: Manages query and mutation definitions, receiving requests and passing them to the service layer. The GraphQL schema acts as the contract for how clients interact with data.

- Service Layer: Contains all core business logic and data processing. It receives requests from the GraphQL resolvers, processes any required logic, and interacts with the database or other services. This approach keeps GraphQL resolvers lightweight and focused on data transfer, while the service layer manages validation, error handling, and business rules.

- Database Layer: Responsible for CRUD operations. By keeping this logic in the service layer, we allow GraphQL to remain simple and focused solely on data query/mutation requests.

# Benefits of this Approach:

- Modularity: Clear separation of GraphQL schema and business logic.
- Scalability: Service layer can grow with complex logic without changing GraphQL code.
- Reusability: Service layer functions can be reused by other parts of the application.
- This architecture is ideal for maintaining a clean, maintainable, and scalable GraphQL API.

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


