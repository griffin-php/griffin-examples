# griffin-examples-basic

Basic Example of Griffin Migrations

## Graph

```
            Users
            ↑
 Payments → Orders
            ↑
            Items ← Movements → Stocks
                    ↓
                    Products
                    ↓
                    Categories
```


## Usage

```
docker-compose run --rm php composer install
docker-compose run --rm php composer migrate
```
