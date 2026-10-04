## About IntroPHP application
> Repository for Introductory PHP exercises.

> To run the program, please read the follow:
#### Requirements
* PHP 8.x

#### Features
This repository contains introductory exercises for learning **PHP**, **HTML**, and **basic programming logic**.  

The exercises aim to help students:
- Understand PHP syntax and control structures.
- Work with forms, GET/POST requests, and server-side processing.
- Use arrays, loops, and conditionals to solve logic problems.
- Validate functionality with automated tests using **PHPUnit**.

#### Installation
```
git clone https://github.com/Stucom-Pelai/MP0613_RA1RA2_IntroPHP.git
```

#### Run tests
##### Run specific Unit Test
```
./vendor/bin/phpunit ./tests/P01_SandboxTest.php
```
##### Run All Unit Tests
```
./vendor/bin/phpunit ./tests
```
##### Run All Unit Tests with detailed log
```
./vendor/bin/phpunit --debug --display-errors --display-deprecations
```
##### Run Unit Test with report
```
./vendor/bin/phpunit --testdox-html testdox.html
```

