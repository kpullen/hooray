# hooray!

In the long, long ago there were just arrays, and functions to handle them. That was cool, but the functions were scattered all over the floor and their argument orders weren't all that orderly. Then [@sancho](https://github.com/sanchothefat) had a great idea! Take the functions, order their arguments a little better, and make them chainable.

## Wrap, transform, realize

Hooray is all about giving you the tools you need to work on arrays, in the form of transformations. The transformations are hung off a Hooray object, which you wrap around your array. When you are all done, just get your new array out the other end. Here is an example:

    $> hooray([1, 2, 3])
       ->map(function(thing) { return thing + 1; })
       ->realize();
    $> [2, 3 4]

Hooray accepts arrays, or just a list of arguments if that's all you've got, so put those brackets away:

    $> hooray(1, 2, 3)
       ->realize();
    $> [1, 2, 3]

Hooray also accepts other hooray objects, so don't worry about double wrapping:
 
    $> hooray(hooray(1, 2, 3))
       ->realize();
    $> [1, 2, 3]

## Adding links to the chain

So, let's say you've been working with hooray, and so far it has solved all your problems. Now you come across a problem that would totally be solved if you could _Just. Invoke. A. Transform!_ Well, sure, you can do that:

    $> Chain::add(
         "reticulateTheSplines",
         function($data, $arg1, $arg2) {
            // Reticulate some splines right here...
            return ["RE", "TIC", "ULATED"];
         });
    $> hooray(1, 2, 3)
       ->reticulateTheSplines($arg1, $arg2)
       ->realize();
    $> ["RE", "TIC", "ULATED"]

As you can see, a call to `Chain::add` created a new link that can immediately be invoked from any instance of hooray. What's more, that link can accept arguments, and the actual array hooray is wrapping gets prepended to the argument list before invocation. The link is then free to return whatevs. It's expected that transformations added through `Chain::add` return an array though. If you want to return something other than an array, use `Chain::addTerminal`.

## Using the library

1. `git clone https://github.com/wemash/hooray`
2. `phing package`
3. `cp hooray.phar /var/www/wherever/you/want`

or.....

1. `composer require wemash/hooray`
2. `composer update`
3. `composer install`