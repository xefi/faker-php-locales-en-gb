<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Extensions\PersonExtension as BasePersonExtension;

class PersonExtension extends BasePersonExtension
{
    public function getLocale(): string|null
    {
        return 'en_GB';
    }

    protected $firstNameMale = [
        'James', 'John', 'William', 'George', 'Charles', 'Thomas', 'Henry', 'Robert', 'Edward', 'Arthur',
        'Frederick', 'Albert', 'Joseph', 'Michael', 'David', 'Richard', 'Andrew', 'Christopher', 'Daniel', 'Matthew',
        'Mark', 'Luke', 'Simon', 'Anthony', 'Peter', 'Benjamin', 'Samuel', 'Oliver', 'Harry', 'Jack',
        'Oscar', 'Alfred', 'Leonard', 'Nicholas', 'Jonathan', 'Elliot', 'Alexander', 'Harrison', 'Lewis', 'Sebastian',
    ];

    protected $firstNameFemale = [
        'Mary', 'Elizabeth', 'Margaret', 'Emily', 'Emma', 'Charlotte', 'Anne', 'Lucy', 'Alice', 'Grace',
        'Daisy', 'Florence', 'Lily', 'Amelia', 'Sophia', 'Eleanor', 'Isabella', 'Jessica', 'Hannah', 'Olivia',
        'Chloe', 'Ruby', 'Megan', 'Phoebe', 'Ella', 'Harriet', 'Abigail', 'Martha', 'Evelyn', 'Clara',
        'Ivy', 'Violet', 'Georgia', 'Matilda', 'Holly', 'Poppy', 'Rosie', 'Imogen', 'Annabelle', 'Bethany',
    ];

    protected $lastName = [
        'Smith', 'Jones', 'Taylor', 'Brown', 'Williams', 'Wilson', 'Johnson', 'Davies', 'Roberts', 'Walker',
        'Wright', 'Thompson', 'Evans', 'Edwards', 'Green', 'Martin', 'King', 'Baker', 'Harrison', 'Wood',
        'Cooper', 'Carter', 'Morris', 'Miller', 'Turner', 'Allen', 'Scott', 'Hill', 'Moore', 'Clark',
        'Ward', 'Watson', 'Morgan', 'Davison', 'Reed', 'Bell', 'Brooks', 'Parker', 'Hughes', 'Fisher',
    ];

    protected $titleMale = ['Mr.', 'Dr.', 'Prof.', 'Rev.', 'Sir'];

    protected $titleFemale = ['Ms.', 'Mrs.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Lady'];
}
