<?php

return [
    'permissions' => [
        'websocket_*' => 'Erlaubt zugriff auf dei Websockets des Servers.',
        'control_console' => 'Erlaubt dem Nutzer daten an die Serverkonsole zu senden.',
        'control_start' => 'Erlaubt dem Nutzer die Serverinstanz zu starten.',
        'control_stop' => 'Erlaubt dem Nutzer die Serverinstanz zu stoppen.',
        'control_restart' => 'Erlaubt dem Nutzer die Serverinstanz neu zu starten.',
        'control_kill' => 'Erlaubt dem Nutzer die Serverinstanz zu "töten".',
        'user_create' => 'Erlaubt dem Nutzer neue Nutzer zu dier Serverinstanz hinzu zu fügen',
        'user_read' => 'Allows the user permission to view users associated with this server.',
        'user_update' => 'Allows the user to modify other users associated with this server.',
        'user_delete' => 'Allows the user to delete other users associated with this server.',
        'file_create' => 'Allows the user permission to create new files and directories.',
        'file_read' => 'Allows the user to see files and folders associated with this server instance, as well as view their contents.',
        'file_update' => 'Allows the user to update files and folders associated with the server.',
        'file_delete' => 'Allows the user to delete files and directories.',
        'file_archive' => 'Allows the user to create file archives and decompress existing archives.',
        'file_sftp' => 'Allows the user to perform the above file actions using a SFTP client.',
        'allocation_read' => 'Allows access to the server allocation management pages.',
        'allocation_update' => 'Allows user permission to make modifications to the server\'s allocations.',
        'database_create' => 'Allows user permission to create a new database for the server.',
        'database_read' => 'Erlaubt dem Nutzer die Datenbanken des Servers ein zu shehen.',
        'database_update' => 'Allows a user permission to make modifications to a database. If the user does not have the "View Password" permission as well they will not be able to modify the password.',
        'database_delete' => 'Erlaubt dem Nutzer Datenbanken zu löschen.',
        'database_view_password' => 'Allows a user permission to view a database password in the system.',
        'schedule_create' => 'Allows a user to create a new schedule for the server.',
        'schedule_read' => 'Allows a user permission to view schedules for a server.',
        'schedule_update' => 'Allows a user permission to make modifications to an existing server schedule.',
        'schedule_delete' => 'Allows a user to delete a schedule for the server.',
    ],
];
