# Awesome FizzBuzz

This project was developed applying the Chain of Responsibility Pattern and the Builder Pattern to develop FizzBuzz.
The "Fizz-Buzz test" is an interview question designed to help filter out the 99.5% of programming job candidates. The text of the programming assignment is as follows:
> Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.

The programming language used was PHP, to start the environment just run the following command with Docker Compose:
```shell
docker-compose up
```
To perform unit tests run the following command:
```shell
vendor/bin/phpunit tests/
```
But before that, install the dependencies (PHPUnit) with the following Composer command:
```shell
composer install
```