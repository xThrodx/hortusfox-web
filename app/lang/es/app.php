<?php

/*
	Asatru PHP - Spanish language file

	Extend this with your phrases
	
	Set variables with {variable-name}
*/

return [
	'_language_ident' => 'Spanish',
	'workspace_title' => '{name} (' . env('APP_NAME') . ' v' . env('APP_VERSION') . ')',
	'enter_email' => 'Introduce tu e-mail',
	'enter_password' => 'Introduce tu contraseña',
	'enter_password_confirmation' => 'Confirma tu contraseña',
	'login' => 'Iniciar sesión',
	'logout' => 'Cerrar sesión',
	'user_not_found' => 'Usuario no encontrado: {email}',
	'password_mismatch' => 'Las contraseñas no coinciden',
	'password' => 'Contraseña',
	'password_confirmation' => 'Contraseña (Confirmación)',
	'restore_password' => 'Restaurar contraseña',
	'restore_password_info' => 'Por favor, sigue las instrucciones que se han enviado a tu e-mail.',
	'reset_password' => 'Reiniciar contraseña',
	'reset_password_hint' => 'Por favor, accede al enlace para reiniciar tu contraseña de acceso a {workspace}: <a href="{url}">Reset password</a>',
	'dashboard' => 'Panel',
	'welcome_message' => 'Hola {name}, ¡Bienvenido!',
	'locations' => 'Ubicaciones',
	'select_location_to_proceed' => 'Elige una ubicación para ver las plantas asociadas',
	'plants' => 'Plantas',
	'add_plant' => 'Añadir Planta',
	'add_plant_short' => 'Añadir',
	'edit_plant' => 'Editar Planta',
	'attribute' => 'Atributo',
	'value' => 'Valor',
	'location' => 'Ubicación',
	'last_watered' => 'Regado por última vez',
	'last_repotted' => 'Replantado por última vez',
	'last_fertilised' => 'Abonado por última vez',
	'perennial' => 'Perenne',
	'cutting_month' => 'Mes de poda',
	'date_of_purchase' => 'Fecha de compra',
	'humidity' => 'Humedad',
	'light_level' => 'Nivel de luz',
	'health_state' => 'Estado de salud',
	'in_good_standing' => 'En Buen Estado',
	'overwatered' => 'Regado en exceso',
	'withering' => 'Marchitamiento',
	'infected' => 'Infectado',
	'plant_warning' => 'Cuidado: esta planta requiere atención especial. Razón: {reason}',
	'notes' => 'Notas',
	'no_notes_specified' => 'No se han especificado notas todavía',
	'select_month' => '- Seleccionar mes -',
	'select_light_level' => '- Seleccionar nivel de luz -',
	'january' => 'Enero',
	'february' => 'Febrero',
	'march' => 'Marzo',
	'april' => 'Abril',
	'may' => 'Mayo',
	'june' => 'Junio',
	'july' => 'Julio',
	'august' => 'Agosto',
	'september' => 'Septiembre',
	'october' => 'Octubre',
	'november' => 'Noviembre',
	'december' => 'Diciembre',
	'yes' => 'Si',
	'no' => 'No',
	'back_to_list' => 'Volver a la lista',
	'back_to_dashboard' => 'Volver al panel',
	'name' => 'Nombre',
	'email' => 'E-Mail',
	'photo' => 'Foto',
	'add' => 'Añadir',
	'cancel' => 'Cancelar',
	'last_edited_by' => 'Editado por última vez: {when} (por {name})',
	'edit_property' => 'Editar propiedad',
	'save' => 'Guardar',
	'light_level_sunny' => 'Soleado',
	'light_level_half_shade' => 'Sombra parcial',
	'light_level_full_shade' => 'Sombra completa',
	'warning_plants_title' => 'Las siguientes plantas requieren atención especial',
	'warning_plants_all_ok' => '¡Hurra! No hay plantas actualmente en peligro',
	'view_plant_details' => 'Ver detalles de la planta',
	'log_title' => 'Registro',
	'loading_please_wait' => 'Espera por favor...',
	'error' => 'Error',
	'photos' => 'Fotos',
	'no_photos_yet' => 'No se han subido fotos adicionales todavía',
	'upload' => 'Subir',
	'upload_photo' => 'Subir foto',
	'label' => 'Etiqueta',
	'confirmPhotoRemoval' => '¿Seguro que quieres eliminar esta foto?',
	'users' => 'Usuarios',
	'photo_uploaded_successfully' => 'La foto se ha subido correctamente',
	'success' => 'Éxito',
	'profile' => 'Perfil',
	'profile_hint' => 'Sesión iniciada como {name} ({email})',
	'last_authored_plants' => 'Últimas plantas creadas',
	'search' => 'Buscar',
	'search_hint' => 'Buscar en la base de datos',
	'input_search' => 'Introduce texto a buscar',
	'search_name' => 'Incluir nombres en la búsqueda',
	'search_scientific_name' => 'Incluir nombres científicos en la búsqueda',
	'search_tags' => 'Incluir etiquetas en la búsqueda',
	'search_notes' => 'Incluir notas en la búsqueda',
	'no_tags_specified' => 'No se han especificado etiquetas todavía',
	'remove_plant' => 'Eliminar planta',
	'confirmPlantRemoval' => '¿Seguro que quieres eliminar esta planta?',
	'tasks' => 'Tareas',
	'tasks_hint' => 'Aquí puedes gestionar tareas requeridas para el cuidado de tu planta',
	'create_task' => 'Crear tarea',
	'create_new' => 'Crear nueva',
	'title' => 'Título',
	'description' => 'Descripción',
	'task_created_successfully' => 'La tarea ha sido creada con éxito',
	'tasks_todo' => 'Por hacer',
	'tasks_done' => 'Terminadas',
	'done' => 'Terminada',
	'edit_task' => 'Editar tarea',
	'task_edited_successfully' => 'La tarea ha sido editada con éxito',
	'scientific_name' => 'Nombre científico',
	'text' => 'Texto',
	'link' => 'Enlace',
	'preferences' => 'Ajustes',
	'edit_preferences' => 'Editar ajustes',
	'language' => 'Idioma',
	'show_log' => 'Mostrar registro',
	'preferences_saved_successfully' => 'Los ajustes se han guardado con éxito',
	'set_watered' => 'Cambiar todo a regado',
	'all_plants_watered' => 'El último estado de regado ha sido cambiado con éxito',
	'confirmSetAllWatered' => '¿Seguro que quieres cambiar la última fecha de regado de todas las plantas?',
	'no_plants_found' => 'No se han encontrado plantas que coincidan con los términos de búsqueda',
	'inventory' => 'Inventario',
	'inventory_hint' => 'Gestiona aquí tu inventario',
	'group' => 'Grupo',
	'confirmInventoryItemRemoval' => '¿Seguro que quieres borrar este item?',
	'add_inventory_item' => 'Añadir item al inventario',
	'edit_inventory_item' => 'Editar item del inventario',
	'manage_groups' => 'Gesionar grupos',
	'token' => 'Token',
	'close' => 'Cerrar',
	'chat' => 'Chat',
	'chat_hint' => 'Este es el chat grupal del espacio de trabajo',
	'send' => 'enviar',
	'new' => 'Nuevo',
	'chatcolor' => 'Color del nombre de usuario en el chat',
	'currentlyOnline' => 'Actualmente en línea: ',
	'no_photo_available' => 'Ninguna foto disponible',
	'due' => 'Pendiente',
	'overdue_tasks' => 'Tareas atrasadas',
	'view_task_details' => 'Ver detalles de la tarea',
	'admin_area' => 'Área de administración',
	'environment' => 'Entorno',
	'workspace' => 'Espacio de trabajo',
	'enable_scroller' => 'Activar desplazador',
	'online_time_limit' => 'Tiempo límite del estado en línea',
	'show_chat_onlineusers' => 'Mostrar usuarios actualmente en línea',
	'show_chat_typingindicator' => 'Mostrar indicador de escritura en el chat',
	'admin' => 'Administrador',
	'create' => 'Crear',
	'update' => 'Actualizar',
	'remove' => 'Borrar',
	'create_user' => 'Crear usuario',
	'account_created' => 'Cuenta creada',
	'account_created_hint' => 'Tu cuenta para {workspace} acaba de ser creada. Por facor <a href="{url}">inicia sesión</a> con tu e-mail y la contraseña <strong>{password}</strong>. Se recomienda encarecidamente cambiar la contraseña tras iniciar sesión por primera vez.',
	'environment_settings_saved' => 'Se han guardado los ajustes del entorno con éxito',
	'user_created_successfully' => 'Se ha creado el nuevo usuario con éxito',
	'user_updated_successfully' => 'Datos del usuario actualizados con éxito',
	'user_removed_successfully' => 'La cuenta del usuario ha sido eliminada con éxito',
	'confirm_user_removal' => '¿Seguro que quieres borrar esta cuenta de usuario?',
	'sorting_type_name' => 'Alfabéticamente',
	'sorting_type_last_watered' => 'Regado/a por última vez',
	'sorting_type_last_repotted' => 'Trasplantado/a por última vez',
	'sorting_type_last_fertilised' => 'Abonado/a por últimna vez',
	'sorting_type_health_state' => 'Estado de salud',
	'sorting_type_perennial' => 'Perenne',
	'sorting_type_light_level' => 'Nivel de luz',
	'sorting_type_humidity' => 'Humedad',
	'sorting_dir_asc' => 'Ascendente',
	'sorting_dir_desc' => 'Descendente',
	'filter_by_text' => 'Filtrar por texto',
	'mail_info_task_overdue' => 'La tarea va con retraso',
	'mail_info_task_overdue_hint' => '¡La tarea <strong>{name}</strong> va con retraso! Fecha límite: {date}. Ir a la sección de tareas: <a href="{url}">{url}</a>',
	'notify_tasks_overdue' => 'Notificame sobre tareas atrasadas',
	'mail_info_task_tomorrow' => 'La fecha límite para la tarea es mañana',
	'mail_info_task_tomorrow_hint' => 'La fecha límite para la tarea <strong>{name}</strong> es mañana. Fecha límite: {date}. Ir a la sección de tareas: <a href="{url}">{url}</a>',
	'notify_tasks_tomorrow' => 'Norificame sobre tareas con fecha límite de mañana',
	'mail_info_calendar_reminder' => 'Información sobre recordatorio del calendario',
	'mail_info_calendar_reminder_hint' => 'El item del calendario <strong>{name}</strong> tiene como fecha límite: {date_from} - {date_till}. Ir al calendario: <a href="{url}">{url}</a>',
	'notify_calendar_reminder' => 'Notifícame sobre fechas límite del calendario',
	'cronpw' => 'Token de autenticación de CronJob',
	'enable_chat' => 'Activar Chat',
	'add_location' => 'Añadir ubicación',
	'icon' => 'Icono',
	'active' => 'Activo',
	'location_added_successfully' => 'La ubicación ha sido añadida con éxito',
	'location_updated_successfully' => 'La ubicación ha sido actualizada con éxito',
	'location_migration' => 'Ubicación a la que mover las plantas',
	'remove_location' => 'Eliminar ubicación',
	'location_removed_successfully' => 'La ubicación fue eliminada con éxito',
	'check_for_new_version' => 'Comprobar si existen actualizaciones',
	'new_version_available' => 'La versión {new_version} está disponible. Obtenla <a href="{url}">aquí</a>.',
	'no_new_version_available' => 'Estás usando la última versión.',
	'admin_media' => 'Medios',
	'media_logo' => 'Logo del espacio de trabajo (.png image)',
	'media_banner' => 'Imagen banner del espacio de trabajo (.jpg)',
	'media_background' => 'Imagen de fondo del espacio de trabajo (.jpg)',
	'media_saved' => 'Los medios fueron guardados con éxito',
	'enable_history' => 'Activar historial',
	'history_name' => 'Nombre del historial',
	'confirmPlantAddHistory' => '¿Quieres realizar esta acción?',
	'confirmPlantRemoveHistory' => '¿Quieres realizar esta acción?',
	'sorting_type_history_date' => 'Fecha del historial',
	'restore_from_history' => 'Restaurar',
	'content_empty' => 'Parece que no hay nada aquí...',
	'last_added_plants' => 'Últimas plantas añadidas',
	'last_authored_plants' => 'Últimas plantas creadas',
	'info' => 'Información',
	'hortusfox_version' => 'HortusFox v{version}',
	'php_version' => 'PHP Version: {version}',
	'mysql_version' => 'MySQL Version: {version}',
	'server_system_info' => 'Servidor: {osn} {osv} on {mt}',
	'server_timezone' => 'Zona horaria: {time}',
	'render_time' => 'Tiempo de renderizado: {time}s',
	'background_overlay_alpha' => 'Valor alfa del recubrimiento',
	'all_tasks_done' => 'No hay tareas en curso actualmente',
	'last_added_or_updated_plants_hint' => 'Seleccionar modo de plantas recientes',
	'show_plants_aoru_added' => 'Mostrar las últimas plantas añadidas',
	'show_plants_aoru_updated' => 'Mostrar las últimas plantas creadas',
	'mail' => 'Correo',
	'smtp_fromname' => 'Nombre del remitente del e-mail',
	'smtp_fromaddress' => 'Dirección del remitente del e-mail',
	'smtp_host' => 'Anfitrión SMTP',
	'smtp_port' => 'Puerto SMTP',
	'smtp_username' => 'Nombre de usuario SMTP',
	'smtp_password' => 'Contraseña SMTP',
	'smtp_encryption' => 'Encriptación SMTP',
	'personal_notes' => 'Notas personales',
	'personal_notes_saved_successfully' => 'Tus notas personales han sido actualizadas con éxito',
	'share_photo' => 'Compartir foto',
	'share_photo_input' => 'Foto a compartir',
	'share_photo_title' => 'Título',
	'share_photo_hint' => 'Este proceso subirá tu foto a {url}, para que puedas compartirla. Recibirás un e-mail cuando se haya compartido con éxito.',
	'share' => 'Compartir',
	'copy_to_clipboard' => 'Copiar',
	'copied_to_clipboard' => 'El contenido ha sido copiado al portapapeles.',
	'mail_share_photo' => 'Notas en tu foto compartida',
	'mail_share_photo_title' => 'Tu foto ha sido compartida',
	'mail_share_photo_hint' => '¡Tu foto ha sido compartida con éxito!<br/><br/>Enlace a la foto: {url_photo}<br/>Enlace para borrarla: {url_removal}',
	'enable_photo_share' => 'Activar intercambio de fotos',
	'restore_password_email_placeholder' => 'Introduce tu dirección de e-mail',
	'search_for_location_icons' => 'Buscar iconos <a href="{url}" target="_blank">aquí</a>.',
	'upcoming_tasks_overview' => 'Próximas tareas',
	'view_more' => 'Ver más',
	'generate' => 'Generar',
	'generate_cronpw_hint' => 'Nota: Generar un nuevo token invalidará el actual',
	'confirmSetAllRepotted' => '¿Estás seguro/a de que quieres actualizar la última fecha de trasplante de todas estas plantas?',
	'all_plants_repotted' => 'El último estado de trasplante ha sido actualizado para estas plantas',
	'set_repotted' => 'Establecer todas como trasplantadas',
	'backup' => 'Copia de seguridad',
	'gallery' => 'Galeria',
	'export' => 'Exportar',
	'import' => 'Importar',
	'import_successful' => '¡Importado con éxito!',
	'pwa_enable' => 'Activar soporte para PWA',
	'home' => 'Inicio',
	'enable_system_messages' => 'Activar mensajes del sistema',
	'plant_count' => '{count} plantas',
	'danger_count' => '{count} en peligro',
	'all_in_good_standing' => 'Todo correcto',
	'theme' => 'Tema',
	'themes' => 'Temas',
	'confirm_generate_new_token' => 'Generar un nuevo token invalidará el anterior. ¿Quieres continuar?',
	'themes_hint' => 'Aquí puedes importar temas. Selecciona un archivo Zip del tema elegido para importarlo y una vez se haya realizado, el tema estará disponible para todos los usuarios. Nota: Si el archivo Zip contiene múltiplees temas, el sistema intentará importarlos todos.',
	'theme_import_successful' => 'La importación se ha realizado con éxito. Temas importados: {count}',
	'theme_list' => 'Lista de temas instalados',
	'confirm_theme_removal' => '¿Seguro que quieres eliminar este tema?',
	'send_confirmation_email' => 'Enviar e-mail de confirmación',
	'create_your_first_location' => 'No se ha añadido ninguna ubicación todavía. Por favor <a href="{url}">crea tu primera ubicación</a> para poder añadir plantas.',
	'error_room_not_empty' => 'La ubicación no está vacía. You debes crear otra ubicación a la que migrar las plantas o eliminar todas las plantas antes de eliminar la ubicación.',
	'extensions' => 'Extensiones',
	'expand' => 'Expandir',
	'collapse' => 'Colapsar',
	'theme_name' => 'Nombre',
	'theme_version' => 'Versión',
	'theme_author' => 'Autor',
	'theme_contact' => 'Contacto',
	'all' => 'Todo',
	'user_created_password' => 'Contraseña del usuario: <strong>{pw}</strong>. Por favor, envía esta contraseña al usuario y comunícale la necesidad de cambiarla tras iniciar sesión.',
	'calendar' => 'Calendario',
	'calendar_hint' => 'Aquí puedes gestionar fechas importantes',
	'range' => 'Rango',
	'go' => 'Ir',
	'add_calendar_item' => 'Añadir item',
	'date_from' => 'Fecha desde',
	'date_till' => 'Fecha hasta',
	'calendar_item_added' => 'El ítem fue añadido con éxito',
	'calendar_class' => 'Clase',
	'calendar_class_water' => 'Riego',
	'calendar_class_repot' => 'Trasplantación',
	'calendar_class_fertilise' => 'Abono',
	'calendar_class_purchase' => 'Compra',
	'calendar_class_cut' => 'Poda',
	'calendar_class_treat' => 'Tratamiento',
	'calendar_class_harvest' => 'Cosecha',
	'calendar_class_other' => 'Otros',
	'edit_calendar_item' => 'Editar ítem',
	'calendar_item_edited' => 'El ítem ha sido editado con éxito',
	'timespan_select' => '- Seleccionar rango -',
	'timespan_one_week' => 'Una Semana',
	'timespan_two_weeks' => 'Dos Semanas',
	'timespan_one_month' => 'Un Mes',
	'timespan_three_months' => 'Tres Meses',
	'timespan_half_a_year' => 'Medio año',
	'remove_calendar_item' => 'Eliminar ítem',
	'confirm_remove_calendar_item' => '¿Seguro que quieres eliminar este ítem?',
	'calendar_overview' => 'Fechas de la semana que viene',
	'show_calendar_view' => 'Mostrar vista del calendario en el panel',
	'unknown_calendar_class' => 'Desconocido',
	'add_calendar_class' => 'Añadir clase de calendario',
	'calendar_class_ident' => 'Ident',
	'calendar_class_name' => 'Nombre',
	'calendar_class_color_background' => 'Color de fondo',
	'calendar_class_color_border' => 'Color del borde',
	'calendar_class_added_successfully' => 'La clase de calendario fue añadida con éxito',
	'calendar_class_edited_successfully' => 'La clase de calendario fue editada con éxito',
	'confirm_remove_calendar_class' => '¿Seguro que quieres eliminar esta clase de calendario?',
	'clone_plant' => 'Clonar planta',
	'show_qr_code' => 'Enseña Código QR',
	'qr_code' => 'Código QR',
	'print' => 'Imprimir',
	'bulk_print_qr_codes' => 'Imprimir Códigos QR',
	'bulk_qrcodes' => 'Impresión múltiple de Códigos QR',
	'select_all' => 'Seleccionar todo',
	'unselect_all' => 'Deseleccionar todo',
	'noListItemsSelected' => 'Ningún item seleccionado',
	'set_fertilised' => 'Establecer todos como abonados',
	'confirmSetAllFertilised' => '¿Seguro que quieres actualizar la última fecha de abono de todas estas plantas?',
	'all_plants_fertilised' => 'El último estado de abonado ha sido actualizado para estas plantas',
	'media_sound_message' => 'Sonido de nuevo mensaje',
	'location_fmt' => 'Ubicación: {loc}'
];