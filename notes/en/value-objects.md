# Value Objects (vo)

Value objects measures, quantifies or describes sth.<br>
They're not based on identity, but instead on the content held.

## Definition

__Ward Cunningham's__ definition:

a measure or description of something. Examples of value objects are things like
numbers, dates, monies and strings. Usually, they are small objects which are used quite
widely. Their identity is based on their state rather than on their object identity. This
way, you can have multiple copies of the same conceptual value object. Every $5 note
has its own identity (thanks to its serial number), but the cash economy relies on every
$5 note having the same value as every other $5 note.

http://wiki.c2.com/?ValueObject

__Martin Fowler's__ definition:

a small object such as a Money or date range object. Their key property is that they
follow value semantics rather than reference semantics. You can usually tell them
because their notion of equality isn’t based on identity, instead two value objects are
equal if all their fields are equal. Although all fields are equal, you don’t need to compare
all fields if a subset is unique - for example currency codes for currency objects are
enough to test equality. A general heuristic is that value objects should be entirely
immutable. If you want to change a value object you should replace the object with
a new one and not be allowed to update the values of the value object itself - updatable
value objects lead to aliasing problems.

http://martinfowler.com/bliki/ValueObject.html

Examples of Value Objects are numbers, text strings, dates, times, a person’s full name (composed
of first, middle, last name, and title), currencies, colours, phone numbers, and postal addresses.


We should to favour Value Objects over Entities. Value objects are easier to create, test, use and maintain.

A concept should be modelled as a Value Object if:

* It measures, quantifies, or describes a thing in the domain
* It can be kept immutable
* It models a conceptual whole, by composing related attributes as an integral unit
* It is completely replaceable when the measurement or description changes
* It can be compared with others through value equality
* It supplies its collaborators with Side-Effect-Free behaviour

__Immutability__

Value Objects should be immutable.

Empty constructors with multiplie setters and getters move the creation responsibility to the client, resulting in the Anemic Domain Model (An anti-pattern).

Code free of side-effects is easy to understand, easy to test and less error prone.

__Factory method / Named constructors__

__Testing immutability and side-effect-free__

A solution is to create a copy of the Value Object you are testing before performing any modifications. Assert both are equal using the implemented equality check. Perform the actions you want to test and assert the results. Finally, assert that the original object and copy are still equal. Let’s put this into practice and test the side-effect-free implementation of our add method in the Money class.

An example of testing method:

copied value object should represent same value(): void;
value object should not be modified on change(): void;
value object should be added(): void;
