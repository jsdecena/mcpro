# MCPro is abbreviation of Municipalities, Cities and Provinces in the Philippines

### A very basic API for getting all the cities, municipality and provinces in the Philippines.

### Installation

- Step1: Add this to your root `composer.json`

```json

	"require": {
	    "jsdecena/mcpro": "1.0.*"
	}

```

- Step2: Add this to your `config/app.php` in `providers` array

```json

	'providers' => [
	    Jsdecena\MCPro\McproServiceProvider::class,
	]

```

- Step3: Run this in your terminal `php artisan vendor:publish`

- Step4: Rename `.env.example` to `.env` and set your database credentials

- Step5: Run this in your terminal `php artisan key:generate`

- Step6: Add these lines in the `/database/seeds/DatabaseSeeder.php`

```json

    $this->call('CountryTableSeeder');
    $this->call('ProvincesTableSeeder');
    $this->call('CitiesTableSeeder');
    $this->call('BarangayTableSeeder');

```

- Step7: Run this in your terminal `composer dump-autoload && php artisan migrate --seed && php artisan serve`

- Step8: Go to [http://localhost:8000/api/v1/country](http://localhost:8000/api/v1/country)

- Enjoy!

### Endpoints

- `api/v1/country` - List all the countries

- `api/v1/country/{country_id}` - Details of the country ( PH is id:169 )

- `api/v1/country/{country_id}/province` - List all the provinces of the country (Currently for the PH)

- `api/v1/country/{country_id}/province/{province_id}` - Details of the province

- `api/v1/country/{country_id}/province/{province_id}/city` - Cities ( and Municipalities) of the province

- `api/v1/country/{country_id}/province/{province_id}/city/{city_id}` - Details of the city

- `api/v1/country/{country_id}/province/{province_id}/city/{city_id}/barangay` - List all the barangays of the City (or Municipality)

### Future

- Reverse lookup - Giving the city id and shows the province and the country etc.

- 404 Exception handling






