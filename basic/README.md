# griffin-examples-basic

Basic Example of Griffin Migrations

## Graph

```
            Users ← ---------------------┐
            ↑                            |
 Payments → Orders                       |
            ↑                            |
            Items ← Movements  → Stocks  |
            |                            |
            └-----→ Products   ← Likes --┘
                    ↓
                    Categories
```

## Usage

```
docker-compose run --rm php composer install
docker-compose run --rm php composer migrate
docker-compose run --rm php composer rollback
```

## Migrate

```
Griffin\Examples\Basic\Categories
Griffin\Examples\Basic\Users
Griffin\Examples\Basic\Orders
Griffin\Examples\Basic\Products
Griffin\Examples\Basic\Items
Griffin\Examples\Basic\Likes
Griffin\Examples\Basic\Stocks
Griffin\Examples\Basic\Movements
Griffin\Examples\Basic\Payments
```

## Rollback

```
Griffin\Examples\Basic\Movements
Griffin\Examples\Basic\Items
Griffin\Examples\Basic\Likes
Griffin\Examples\Basic\Products
Griffin\Examples\Basic\Categories
Griffin\Examples\Basic\Payments
Griffin\Examples\Basic\Orders
Griffin\Examples\Basic\Stocks
Griffin\Examples\Basic\Users
```
