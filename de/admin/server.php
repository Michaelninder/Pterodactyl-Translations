<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Sie versuchen, die Standardzuweisung für diesen Server zu löschen, aber es gibt keine Ersatzzuweisung.',
        'marked_as_failed' => 'Dieser Server wurde als fehlerhaft bei einer vorherigen Installation markiert. Der aktuelle Status kann in diesem Zustand nicht geändert werden.',
        'bad_variable' => 'Es gab einen Fehler beim Überprüfen der :name Variable.',
        'daemon_exception' => 'Es gab eine Ausnahme beim Versuch, mit dem Daemon zu kommunizieren, was zu einem HTTP/:code Antwortcode führte. Diese Ausnahme wurde protokolliert. (Request-ID: :request_id)',
        'default_allocation_not_found' => 'Der angeforderte Standardstandort wurde nicht in den Adressen des Servers gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration für diesen Server wurde aktualisiert. Wenn der Nest oder das Egg dieses Servers geändert wurde, wird jetzt eine Neuinstallation durchgeführt.',
        'server_deleted' => 'Der Server wurde erfolgreich aus diesem System gelöscht.',
        'server_created' => 'Der Server wurde erfolgreich im Panel erstellt. Bitte geben Sie dem Daemon einige Minuten, um diesen Server vollständig zu installieren.',
        'build_updated' => 'Die Build-Details für diesen Server wurden aktualisiert. Einige Änderungen erfordern möglicherweise einen Neustart, um wirksam zu werden.',
        'suspension_toggled' => 'Der Suspendierungsstatus des Servers wurde auf :status geändert.',
        'rebuild_on_boot' => 'Dieser Server wurde als erforderlich markiert, um einen Docker-Container neu aufzubauen. Dies wird beim nächsten Start des Servers geschehen.',
        'install_toggled' => 'Der Installationsstatus für diesen Server wurde geändert.',
        'server_reinstalled' => 'Dieser Server wurde für eine Neuinstallation in die Warteschlange gestellt, die jetzt beginnt.',
        'details_updated' => 'Die Serverdetails wurden erfolgreich aktualisiert.',
        'docker_image_updated' => 'Das Standard-Docker-Image für diesen Server wurde erfolgreich geändert. Ein Neustart ist erforderlich, um diese Änderung anzuwenden.',
        'node_required' => 'Sie müssen mindestens einen Knoten konfigurieren, bevor Sie einen Server zu diesem Panel hinzufügen können.',
        'transfer_nodes_required' => 'Sie müssen mindestens zwei Knoten konfigurieren, bevor Sie Server übertragen können.',
        'transfer_started' => 'Die Serverübertragung wurde gestartet.',
        'transfer_not_viable' => 'Der von Ihnen ausgewählte Knoten hat nicht den erforderlichen Festplattenspeicher oder Arbeitsspeicher, um diesen Server unterzubringen.',
    ],
];
