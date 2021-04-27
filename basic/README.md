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

## Planning

```
Griffin\Examples\Basic\Categories
Griffin\Examples\Basic\Users
Griffin\Examples\Basic\Orders
Griffin\Examples\Basic\Stocks
Griffin\Examples\Basic\Products
Griffin\Examples\Basic\Movements
Griffin\Examples\Basic\Items
Griffin\Examples\Basic\Payments
```
