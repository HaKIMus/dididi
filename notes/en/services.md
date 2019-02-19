# Services

| Type           | Characteristics |
| -------------- | --------------- |
| Application    | Operate on scalar types, transforming them into domain types. Scalar types can be considered any type that is unknown to the domain model. This includes primitive and types that do not belong to the domain. Services of this kind do not contain any business rules nor domain logic. They simply exist to coordinate, orchestrate and execute operations that belong to the domain model. |
| Domain         | Operate on only types belonging to the domain. They contain meaningful concepts that can be found within the domains ubiquitous language. |
| Infrastructure | Operations that fulfil infrastructure concerns, such as sending emails, logging meaningful data. |

__Application services__

Application services are the middleware between the outside world and the domain logic. The purpose of such a mechanism is to transform commands from the outside world into meaningful domain instructions.


