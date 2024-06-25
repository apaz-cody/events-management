Departments
GET /api/departments

Retrieves a list of all departments.
POST /api/departments

Creates a new department.
GET /api/departments/{department}

Retrieves details of a specific department.
PUT /api/departments/{department}

Updates details of a specific department.
DELETE /api/departments/{department}

Deletes a specific department.
Events
GET /api/events

Retrieves a list of all events.
POST /api/events

Creates a new event.
GET /api/events/{event}

Retrieves details of a specific event.
PUT /api/events/{event}

Updates details of a specific event.
DELETE /api/events/{event}

Deletes a specific event.
GET /api/events/{event}/attendees

Retrieves a list of attendees for a specific event.
POST /api/events/{event}/attendees

Adds a new attendee to a specific event.
GET /api/events/{event}/attendees/{attendee}

Retrieves details of a specific attendee for an event.
DELETE /api/events/{event}/attendees/{attendee}

Removes a specific attendee from an event.
Authentication
POST /api/login

Logs in and obtains an authentication token.
POST /api/logout

Logs out and invalidates the current authentication token.