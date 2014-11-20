#Tasks#
- Database backup system. This needs to back up all the data, automate updating the database architecture, and insert everything back in without loss of data.

#Basic Requirements#
- Todo list or calendar style task adding
- Scheduling tasks automatically without collisions
- Keeping track of prerequisite tasks (Can be tasks from other users)
- Finding the next task to work o
- Tasks either have a set scheduled time or no scheduled time
- Public tasks (can be taken on by any user)
- Protected tasks (can be owned by more than one user, by invite)
- Private tasks (Can only be owned by one user)
- Locations with distance relationship
- Public/protected/private locations

#Restrictions#
- Tasks are atomic. If you want a big task make it depend on smaller ones. There are no subtasks.
- There's no room for good descriptions, so they're actually links to text files
- Bools are efficient so visibility is based on *public* or *protected or private*. True means it is public, false and having more than one user means protected, false and having one user is private. True and having no users means keep, false and having no users means destroy.
- Locations are all imaginary. There is no GPS data implemented yet so it will have to be built organically from people putting in their best estimates for distance.

#Conventions#
Databases, tables, columns, triggers, etc. are all lowercase_with_underscore_spacing.
