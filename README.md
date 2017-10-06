# PHP Enum Wrapper
A useful class which can be extended to give enum-like features to your code. Is intended to be used when modeling the MySQL enum type.

## Features
* Get an array of all the enum keys and values.
* Check if the enum contains a value.
* Check if the enum has a key.
* Easy to use, simply extend the Enum class.

## Installation
As this repository is private on GitHub, we need to tell composer where to find it. To do this, we need to add this repo to the `composer.json` file:

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://github.com/goldspecdigital/phpenum" }
    ]
}
``` 

You can then pull in this dependency as normal: `composer require goldspecdigital/phpenum "~1.0"`

## Contributing
Anyone can contribute to this simple project. Simply submit a pull request at the [goldspecdigital/phpenum](https://github.com/goldspecdigital/phpenum) repository.
