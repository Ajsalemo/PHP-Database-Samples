# PHP-Database-Samples

This repo contains various database samples with PHP using [PDO](https://www.php.net/manual/en/pdo.drivers.php) and Database specific Drivers. The drivers used in this sample are:
- `cosmosdb-mongo` 
  - `cosmosdb-mongo-driver` - [MongoDB driver](https://docs.mongodb.com/drivers/php/)
- `mariadb`
  - `mariadb-pdo` - [MariaDB's PDO driver](https://www.php.net/manual/en/ref.pdo-mysql.php)
- `mssql`
  - `mssql-pdo` - [MSSQL's PDO driver](https://www.php.net/manual/en/ref.pdo-sqlsrv.php)
  - `mssql-driver` - [MSSQL specific driver](https://www.php.net/manual/en/function.sqlsrv-connect.php)
- `mysql` - 
  - `mysql-pdo` - [MySQL's PDO driver](https://www.php.net/manual/en/ref.pdo-mysql.php)
  - `mysql-driver` - [MySQL specific driver](https://www.php.net/manual/en/mysqli.real-connect.php)
- `postgres` -
  - `postgres-pdo` - [Postgres PDO driver](https://www.php.net/manual/en/ref.pdo-pgsql.php)
  - `postgres-driver` - [Postgres specific driver](https://www.php.net/manual/en/function.pg-connect.php)

Each sample can be deployed to an Azure PHP App Service and tested with either Azure Database for MariaDB/Postgres/MySQL Instances or Azure SQL Server.

## Running locally
- Be sure to set the appropriate environment variables as seen in `config.php`
- If you encounter 'missing driver' errors, make sure these are enabled in your `php.ini` file. Depending on your installation method, you may or may not need to install the relevant `.dll`'s in your local environment. For example, the [`mssql`](https://docs.microsoft.com/en-us/sql/connect/php/loading-the-php-sql-driver?view=sql-server-ver15) driver.
