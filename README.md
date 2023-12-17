

## How to Run?
1. Clone this repository
2. Checkout to develop branch
3. Download the .env in [here](https://drive.google.com/file/d/1JKnG2Lh-D2Faa1T2705BHDhjjO0dq3lb/view?usp=sharing)
4. Create database in phpmyadmin using this command
```
CREATE DATABASE `fitness-plan-testing`;
```
3. run "composer install"
```
composer install
npm i
php spark migrate:refresh
php spark db:seed UserSeeder
```
4. Open 2 different terminal, run this in terminal 1
```
npm mix watch
```  
and run this in terminal 2 
```
php spark serve --port 8081
``````
5. Don't forget to start the Mysqli server in XAMP

## Api Endpoints for
| No  | HTTP Method | URL        | Description                           |
| --- | ----------- | ---------- | ------------------------------------- |
| 1   | GET         | {{baseURL}}/calories-converter?calories=Q     | Show the recommendation of activities taken after eating a food with Q calories   |


