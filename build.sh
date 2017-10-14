#!/bin/bash

php ./vendor/bin/phpmetrics --report-html=reporting/phpmetrics .
phpunit -c phpunit.xml.dist
