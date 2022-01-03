# PHP-Database-Samples

This repo contains various database samples with PHP using [PDO](https://www.php.net/manual/en/pdo.drivers.php). The PDO drivers used in this sample are:
- `pdo-mariadb` - [MariaDB's PDO driver](https://www.php.net/manual/en/ref.pdo-mysql.php)
- `pdo-mssql` - [MSSQL's PDO driver](https://www.php.net/manual/en/ref.pdo-sqlsrv.php)
- `pdo-mysql` - [MySQL's PDO driver](https://www.php.net/manual/en/ref.pdo-mysql.php)
- `pdo-postgres` - [Postgres PDO driver](https://www.php.net/manual/en/ref.pdo-pgsql.php)

Each sample can be deployed to an Azure PHP App Service and tested with either Azure Database for MariaDB/Postgres/MySQL Instances or Azure SQL Server.

## Running locally
- Be sure to set the appropriate environment variables as seen in `config.php`
- If you encounter 'missing driver' errors, make sure these are enabled in your `php.ini` file. Depending on your installation method, you may or may not need to install the relevant `.dll`'s in your local environment. For example, the [`mssql`](https://docs.microsoft.com/en-us/sql/connect/php/loading-the-php-sql-driver?view=sql-server-ver15) driver.
