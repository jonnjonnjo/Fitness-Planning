# CodeIgniter 4 Application Starter

For each new branch, please pull it from branch `develop`. Branch and commit message naming must follow the following format.

-   Branch : `<type>/<title>`
-   Branch : `<type>: <subject commit>`

The type of the branch could follow this syntax

-   `feat` → Changes, addition, or removal of features. Ex: `feat: add navbar component`
-   `fix` → Bug fixing, followed by the bug.
-   `docs` → Update README.md
-   `style` → Only updating style, no code logic changes
-   `chore` → Install new dependencies/packages
-   `refactor` → Changes in code, eg. renaming a variable
-   `test` → Add testing unit
-   `revert` → Reverting a commit

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
| 1   | GET         | /calories-converter?calories=Q     | Show the recommendation of activities taken after eating a food with Q calories   |


