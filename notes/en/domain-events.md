# Domain Events

Domain Events are one specific type of event used for notifying Domain changes to local or remote Bounded Contexts.

__Vaughn Vernon__ defines a Domain Event as

as an occurrence capture of something what happened in the domain.

__Eric Evans__ defines a Domain Event as

a full-fledged part of the domain model, a representation of something that happened in the domain. Ignore irrelevant domain activity while making explicit the events that the domain experts want to track or be notified of, or which are associated with state change in the other model objects.

__Martin Fowler__ defines a Domain Event as

captures the memory of something interesting which affects the domain. 

Examples of Domain Events in a Web application are UserRegistered, OrderPlaced, UserRelocated or ProductAdded.

DomainEvents are usually designed as immutable
Constructor will initialize the full state of the DomainEvent
DomainEvents will have getters to access to its attributes
Include the identity of the Aggregate that perform the action
Include other Aggregate identities related with the first one
Include parameters that caused the Event if useful

## Event Store

An Event Store is used to store Events. We can think about it as a repository for our events. The repository lives in our Domain space as an abstraction. It's responsible for appending Domain Events and querying them.
