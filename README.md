# Botticelli

Botticelli is a Symfony2 bundle that provides an interactive shell for your
application, similar to the Rails console. [Phpsh](http://www.phpsh.org/)
must be installed to use Botticelli.

## Installation

Add it to the require section in your `composer.json`:

    "davidmikesimon/botticelli-bundle": "dev-master"

And to the bundles list in your `app/AppKernel.php`:

    new DavidMikeSimon\BotticelliBundle\DavidMikeSimonBotticelliBundle()

## Usage

    $ php app/console botticelli:shell
