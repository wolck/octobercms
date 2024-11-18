<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'A(z) :type mezőtípus érvénytelen.',
    'options_method_invalid_model' => 'A(z) \':field\' tulajdonság nem passzol a modellhez. Próbálja meghatározni a beállítást, ami megfelelő a(z) :model osztály számára.',
    'options_method_not_exists' => 'A(z) :model osztálynak egy :method() nevű metódust kell definiálnia a(z) \':field\' űrlapmező számára, ami visszaadja a beállításokat.',
    'colors_method_not_exists' => 'A(z) :model modell osztálynak egy :method() nevű metódust kell definiálnia a(z) \':field\' űrlapmező számára, ami visszaadja a html HEX kódot.',
  ],
  'widget' => [
    'not_registered' => 'A(z) \':name\' widget osztálynév regisztrálása nem történt meg.',
    'not_bound' => 'A(z) \':name\' osztálynevű widget kötése nem történt meg a vezérlővel.',
  ],
  'page' => [
    'untitled' => 'Névtelen',
    'not_found' => [
      'label' => 'Az oldal nem található',
      'help' => 'A megadott webcím alatt nem jeleníthető meg tartalom. Kérjük próbálkozzon más címmel.',
      'back_link' => 'Vissza az előző oldalra',
    ],
    'access_denied' => [
      'label' => 'Hozzáférés megtagadva',
      'help' => 'Nem rendelkezik a szükséges engedélyekkel ennek a lapnak a megtekintéséhez.',
      'cms_link' => 'Vissza a látogatói oldalra',
    ],
    'no_database' => [
      'label' => 'Az adatbázis nem elérhető',
      'help' => 'Kérjük ellenőrizze a hozzáférési adatok helyességét majd próbálja újra betölteni az oldalt.',
      'cms_link' => 'Vissza a weboldalra',
    ],
  ],
  'partial' => [
    'not_found_name' => 'A(z) \':name\' részlap nem található.',
    'invalid_name' => 'Helytelen részlap név: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Helytelen AJAX handler név: :name.',
    'not_found' => 'A(z) \':name\' AJAX handler nem található.',
  ],
  'account' => [
    'impersonate' => 'Átjelentkezés a fiókba',
    'impersonate_confirm' => 'Biztos, hogy átjelentkezik a felhasználó saját fiókjába? Ezáltal a jelenlegi munkamenetből ki lesz jelentkeztetve.',
    'impersonate_success' => 'Sikeresen átjelentkezett a másik fiókba',
    'impersonate_working' => 'Átjelentkezés...',
    'impersonating' => 'Átjelentkezve mint :full_name',
    'stop_impersonating' => 'Visszajelentkezés',
    'signed_in_as' => 'Belépve mint :full_name',
    'sign_out' => 'Kijelentkezés',
    'login_prompt' => 'Üdvözöljük újra! Kérjük jelentkezzen be a weboldal menedzseléséhez.',
    'login_placeholder' => 'felhasználó',
    'password_placeholder' => 'jelszó',
    'enter_email' => 'Adja meg az e-mail címét',
    'email_placeholder' => 'e-mail cím',
    'apply' => 'Alkalmaz',
    'cancel' => 'Mégsem',
    'delete' => 'Törlés',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Vezérlőpult',
    'widget_inspector_title' => 'Widget testreszabása',
    'widget_inspector_description' => 'A jelenlegi widgethez tartozó beállítások.',
    'widget_columns_label' => 'Szélesség :columns',
    'widget_columns_description' => 'A widget szélessége, egy 1 és 10 közötti szám.',
    'widget_columns_error' => 'Adja meg a widget szélességét egy 1 és 10 közötti számként.',
    'columns' => '{1} oszlop|[2,Inf] oszlop',
    'widget_new_row_label' => 'Új sorba',
    'widget_new_row_description' => 'A widget új sorba helyezése.',
    'widget_title_label' => 'Megjelenő cím',
    'widget_title_error' => 'A widget címének megadása kötelező.',
    'reset_layout_success' => 'A visszaállítás megtörtént.',
    'make_default_success' => 'A jelenlegi elrendezés lett az alapértelmezett.',
    'collapse_all' => 'Összes becsukása',
    'expand_all' => 'Összes kibontása',
    'status' => [
      'widget_title_default' => 'Rendszer állapota',
      'update_available' => '{0} frissítés érhető el!|{1} frissítés érhető el!|[2,Inf] frissítés érhető el!',
      'updates_pending' => 'Függőben lévő frissítések',
      'updates_nil' => 'A weboldal naprakész',
      'updates_link' => 'Frissítés',
      'warnings_pending' => 'Függőben lévő teendők',
      'warnings_nil' => 'Minden rendben van',
      'warnings_link' => 'Megtekintés',
      'core_build' => 'Verzió',
      'event_log' => 'Esemény napló',
      'request_log' => 'Kérelem napló',
      'app_birthday' => 'Telepítve',
    ],
    'welcome' => [
      'widget_title_default' => 'Üdvözöljük!',
      'welcome_back_name' => 'Köszönjük, hogy visszatért a(z) :app weboldalra, :name.',
      'welcome_to_name' => 'Köszöntjük a(z) :app weboldalon, :name.',
      'first_sign_in' => 'Ez az első alkalom, hogy bejelentkezett.',
      'last_sign_in' => 'Legutóbbi bejelentkezése:',
      'view_access_logs' => 'Hozzáférés napló megtekintése',
      'nice_message' => 'Legyen jó napja!',
    ],
  ],
  'user' => [
    'name' => 'Admin',
    'list_title' => 'Adminok kezelése',
    'new' => 'Új admin',
    'first_name' => 'Vezetéknév',
    'last_name' => 'Keresztnév',
    'full_name' => 'Teljes név',
    'email' => 'E-mail cím',
    'role_field' => 'Szerepkör',
    'role_comment' => 'Meghatározza a felhasználó jogosultságait. Felülbírálható a felhasználó adatlapján, az Engedélyek fülön.',
    'groups' => 'Csoportok',
    'groups_comment' => 'Adja meg, hogy a felhasználó melyik csoport(ok)ba tartozzon.',
    'avatar' => 'Profilkép',
    'password' => 'Jelszó',
    'password_confirmation' => 'Jelszó megerősítése',
    'permissions' => 'Engedélyek',
    'account' => 'Profil',
    'superuser' => 'Szuperadmin',
    'superuser_comment' => 'Korlátlan hozzáférést biztosít az admin felülethez.',
    'send_invite' => 'Meghívó küldése e-mailben',
    'send_invite_comment' => 'Csak a belépéshez szükséges adatokat tartalmazza.',
    'delete_confirm' => 'Valóban törölni akarja ezt a felhasználót?',
    'return' => 'Vissza az adminokhoz',
    'allow' => 'Engedélyezés',
    'inherit' => 'Öröklés',
    'deny' => 'Tiltás',
    'activated' => 'Aktivált',
    'last_login' => 'Bejelentkezve',
    'created_at' => 'Létrehozva',
    'updated_at' => 'Módosítva',
    'deleted_at' => 'Törölve',
    'show_deleted' => 'Töröltek mutatása',
    'group' => [
      'name' => 'Csoport',
      'name_field' => 'Név',
      'name_comment' => 'A név a csoport létrehozásnál és szerkesztésnél jelenik meg.',
      'description_field' => 'Leírás',
      'is_new_user_default_field_label' => 'Alapértelmezett csoport',
      'is_new_user_default_field_comment' => 'Az új adminisztrátorok hozzáadása ehhez a csoporthoz.',
      'code_field' => 'Kód',
      'code_comment' => 'Adjon meg egy egyedi kódot, ha az API-val kíván hozzáférni.',
      'list_title' => 'Csoportok',
      'new' => 'Új csoport',
      'delete_confirm' => 'Valóban törölni akarja az admin csoportot?',
      'return' => 'Vissza a csoportokhoz',
      'users_count' => 'Felhasználók',
    ],
    'role' => [
      'name' => 'Szerepkör',
      'name_field' => 'Név',
      'name_comment' => 'A szerepkör megnevezése, ami a listákban jelenik meg.',
      'description_field' => 'Leírás',
      'code_field' => 'Kód',
      'code_comment' => 'Egyedi értéket adjon meg, amit az API elérés során használhat.',
      'list_title' => 'Szerepkörök',
      'new' => 'Új szerepkör',
      'delete_confirm' => 'Valóban törölni akarja a szerepkört?',
      'return' => 'Vissza a szerepkörhöz',
      'users_count' => 'Felhasználók',
    ],
    'preferences' => [
      'not_authenticated' => 'Nincs olyan hitelesített felhasználó, aki számára betölthetők vagy menthetők a beállítások.',
    ],
    'trashed_hint_title' => 'Ez a fiók törölve lett',
    'trashed_hint_desc' => 'A visszaállításához kattintson a jobb alsó sarokban található ikonra.',
  ],
  'list' => [
    'default_title' => 'Lista',
    'search_prompt' => 'Keresés...',
    'no_records' => 'Nincs megjeleníthető tartalom',
    'missing_model' => 'Nincs modell definiálva a(z) :class osztályban használt lista viselkedéshez.',
    'missing_column' => 'Nincsenek oszlop definíciók a(z) :columns oszlopok számára.',
    'missing_columns' => 'A(z) :class osztályban használt listának nincsenek definiált lista oszlopai.',
    'missing_definition' => 'A lista viselkedés nem tartalmaz oszlopot a(z) \':field\' mező számára.',
    'missing_parent_definition' => 'A lista viselkedés nem tartalmaz definíciót az alábbihoz: \':definition\'.',
    'behavior_not_ready' => 'Nem történt meg a lista viselkedés inicializálása. Kérjük ellenőrizze, hogy meghívta-e a makeLists() függvényt a vezérlőben.',
    'invalid_column_datetime' => 'A(z) \':column\' oszlopérték nem DateTime objektum, hiányzik egy $dates hivatkozás a modellben?',
    'pagination' => 'Megjelenítve: :from-:to / :total',
    'first_page' => 'Első lap',
    'last_page' => 'Utolsó lap',
    'prev_page' => 'Előző lap',
    'next_page' => 'Következő lap',
    'refresh' => 'Frissítés',
    'updating' => 'Folyamatban...',
    'loading' => 'Betöltés...',
    'check' => 'Bejelöl',
    'create_button' => 'Új :name',
    'delete_selected' => 'Eltávolítás',
    'delete_selected_empty' => 'A törléshez előbb ki kell választani elemet.',
    'delete_selected_confirm' => 'Valóban töröljük a kiválasztott elemeket?',
    'delete_selected_success' => 'Sikeresen törölve lettek a kiválasztott elemek.',
    'column_switch_true' => 'Igen',
    'column_switch_false' => 'Nem',
  ],
  'object_list' => [
    'prop_cant_be_empty' => 'A tulajdonság :property nem lehet üres',
    'key_value_exists' => 'Az érték már definiálva lett: :property_value',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => 'Új :name',
    'update_title' => ':name szerkesztése',
    'preview_title' => ':name gyorsnézete',
    'restore_success' => 'A(z) :name visszaállítása sikerült',
    'reset_success' => 'A visszaállítás sikerült',
    'missing_id' => 'Nincs megadva az űrlap rekord azonosítója.',
    'missing_tab' => 'Hiányzik egy érvényes fül definíció.',
    'missing_model' => 'A(z) :class osztályban használt űrlap viselkedésének nincs definiált modellje.',
    'missing_definition' => 'Az űrlap viselkedés nem tartalmaz mezőt a(z) \':field\' mezőhöz.',
    'action_confirm' => 'Biztos benne?',
    'create' => 'Létrehozás',
    'create_and_close' => 'Létrehozás és bezárás',
    'creating' => 'Létrehozás...',
    'creating_name' => 'A(z) :name létrehozása...',
    'save' => 'Mentés',
    'save_and_close' => 'Mentés és bezárás',
    'saving' => 'Mentés...',
    'saving_name' => 'A(z) :name mentése...',
    'delete' => 'Törlés',
    'deleting' => 'Törlés...',
    'confirm_delete' => 'Biztos, hogy törölhető?',
    'confirm_delete_multiple' => 'Biztos, hogy mindegyik törölhető?',
    'deleting_name' => 'A(z) :name törlése...',
    'restore' => 'Visszaállítás',
    'restoring' => 'Visszaállítás...',
    'confirm_restore' => 'Biztos, hogy állítsuk vissza?',
    'reset_default' => 'Alaphelyzet',
    'resetting' => 'Visszaállítás',
    'resetting_name' => 'A(z) :name visszaállítása',
    'undefined_tab' => 'Egyebek',
    'field_off' => 'Ki',
    'field_on' => 'Be',
    'add' => 'Hozzáadás',
    'apply' => 'Alkalmaz',
    'cancel' => 'Mégsem',
    'close' => 'Bezárás',
    'confirm' => 'Megerősítés',
    'reload' => 'Újratöltés',
    'complete' => 'Befejezés',
    'ok' => 'Rendben',
    'or' => 'vagy',
    'confirm_tab_close' => 'Valóban be akarja zárni a fület? El fognak veszni a nem mentett módosítások.',
    'behavior_not_ready' => 'Nem történt meg az űrlap viselkedésének inicializálása. Kérjük ellenőrizze, hogy meghívta-e az initForm() függvényt a vezérlőben.',
    'preview_no_files_message' => 'Nincs megadva fájl.',
    'preview_no_media_message' => 'Nincs megadva kép.',
    'preview_no_record_message' => 'Nincs megadva mező.',
    'select' => 'Kiválaszt',
    'select_all' => 'mindegyik',
    'select_none' => 'egyik sem',
    'insert_row' => 'Sor beszúrása',
    'insert_row_below' => 'Sor beszúrása alá',
    'delete_row' => 'Sor törlése',
    'concurrency_file_changed_title' => 'A fájl megváltozott',
    'concurrency_file_changed_description' => 'A jelenleg szerkesztett fájlt egy másik felhasználó már módosította. Újratöltheti és elveszti a változtatásait, vagy felülírja a fájlt.',
    'return_to_list' => 'Vissza a listához',
    'no_options_found' => 'Nem találhatók lehetőségek',
    'error' => 'Hiba',
    'toggle_full_screen' => 'Teljes képernyőre váltás',
  ],
  'treeview' => [
    'expand' => 'Kibont',
    'collapse' => 'Összecsuk',
    'clear_search' => 'Keresés törlése',
    'search' => 'Keresés',
    'command_or_document' => 'Parancs vagy dokumentum...',
    'quick_access' => 'Gyors elérés',
    'open' => 'Kinyit',
    'commands' => 'Parancsok',
  ],
  'tabs' => [
    'close' => 'Fül bezárása',
    'close_all' => 'Összes bezárása',
    'close_others' => 'Többi bezárása',
    'close_saved' => 'Bezárás és mentés',
    'full_screen' => 'Teljes képernyőre váltás',
  ],
  'modal' => [
    'close' => 'Bezárás',
  ],
  'dropdownmenu' => [
    'go_back' => 'Vissza',
    'close_menu' => 'Menü bezárása',
  ],
  'recordfinder' => [
    'find_record' => 'Tartalom keresése',
    'invalid_model_class' => 'A(z) ":modelClass" modell osztály érvénytelen a tartalom kereséshez.',
    'cancel' => 'Mégsem',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'A reláció viselkedésnek nincs semmilyen konfigurációja a következőhöz: \':config\'.',
    'missing_definition' => 'A reláció viselkedés nem tartalmazza a(z) \':field\' mező definícióját.',
    'missing_model' => 'A(z) :class osztályban használt reláció viselkedésnek nincs definiált modellje.',
    'invalid_action_single' => 'Ez a művelet nem hajtható végre egyetlen kapcsolaton.',
    'invalid_action_multi' => 'Ez a művelet nem hajtható végre több kapcsolaton.',
    'help' => 'Kattintson egy elemre a hozzáadásához',
    'add' => 'Hozzáadás',
    'link_selected' => 'Kijelöltek csatolása',
    'cancel' => 'Mégsem',
    'close' => 'Bezárás',
    'create' => 'Létrehozás',
    'update' => 'Frissítés',
    'preview' => 'Előnézet',
    'remove_name' => 'A(z) :name eltávolítása',
    'delete_name' => 'A(z) :name törlése',
    'link' => 'Csatolás',
    'unlink_name' => ':name csatolásának megszüntetése',
  ],
  'reorder' => [
    'default_title' => 'Elemek újrarendezése',
    'no_records' => 'Nincs elérhető tartalom a rendezéshez.',
  ],
  'model' => [
    'name' => 'Modell',
    'not_found' => 'Nem található :id azonosítójú \':class\' modell.',
    'missing_id' => 'Nincs azonosító megadva a modell rekord kereséséhez.',
    'missing_relation' => 'A(z) \':class\' modell nem tartalmaz definíciót a(z) \':relation\' reláció számára.',
    'missing_method' => 'A(z) \':class\' modell nem tartalmaz \':method\' metódust.',
    'invalid_class' => 'A(z) :class osztályban használt :model modell nem érvényes, örökölnie kell a \\Model osztályt.',
    'mass_assignment_failed' => 'A tömeges hozzárendelés a(z) \':attribute\' modell attribútumhoz nem sikerült.',
  ],
  'warnings' => [
    'tips' => 'Beállítási tippek',
    'tips_description' => 'Az alábbi dolgokra figyeljen oda a rendszer megfelelő működése érdekében.',
    'permissions' => 'A(z) :name könyvtár vagy alkönyvtárai a PHP számára nem írhatóak. Adjon megfelelő engedélyeket a kiszolgálónak erre a könyvtárra.',
    'extension' => 'A(z) :name PHP kiterjesztés nincs telepítve. Telepítse ezt a függvénytárat és aktiválja a kiterjesztést.',
    'plugin_missing' => 'A(z) :name bővítményre szükség van, de nincs telepítve. Kérjük telepítse ezt a bővítményt.',
    'debug' => 'A hibakeresési mód engedélyezve van. Ez nem ajánlott éles weboldal esetén.',
  ],
  'editor' => [
    'toolbar_buttons_presets' => [
      'default' => 'Alapértelmezett',
      'minimal' => 'Minimális',
      'full' => 'Teljes',
    ],
    'paragraph_formats_comment' => 'A felvett értékek lenyíló listában fognak megjelenni.',
  ],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Beállításaim',
    'menu_description' => 'A fiókkal kapcsolatos beállítások',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Hangsúlyos szín',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'mind',
    'options_method_not_exists' => 'A(z) :model osztálynak kötelező definiálni a(z) :method() metódust a(z) \':filter\' szűrő feltételhez.',
    'options_static_method_invalid_value' => 'A statikus metódus \':method()\' a(z) :class nem ad vissza érvényes beállítás tömböt.',
    'date_all' => 'minden időszak',
    'number_all' => 'minden szám',
  ],
  'import_export' => [
    'row' => ':row sor',
    'export_error' => 'Exportálási hiba',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Nyugat-európai)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Közép-európai)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, Dél-európai)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, Észak-európai)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cirill)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arab)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Görög)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Héber)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Török)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Északi)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Balti)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Kelta)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Nyugat-európai Euró jellel)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Média kezelése',
  ],
  'mediafinder' => [
    'label' => 'Média',
    'no_image' => 'A kép nem található',
    'not_an_image' => 'A kiválasztott fájl nem kép',
    'click_to_select_file' => 'Kattintson a fájl kiválasztásához',
  ],
  'media' => [
    'menu_label' => 'Média',
    'upload' => 'Feltöltés',
    'move' => 'Áthelyezés',
    'delete' => 'Törlés',
    'add_folder' => 'Könyvtár létrehozása',
    'search' => 'Keresés...',
    'display' => 'Megjelenítés',
    'filter_everything' => 'Összes',
    'filter_images' => 'Kép',
    'filter_video' => 'Videó',
    'filter_audio' => 'Audió',
    'filter_documents' => 'Dokumentum',
    'library' => 'Média',
    'size' => 'Méret',
    'title' => 'Név',
    'last_modified' => 'Módosítva',
    'public_url' => 'Webcím',
    'click_here' => 'Megtekintés',
    'thumbnail_error' => 'Hiba a bélyegkép létrehozásánál.',
    'return_to_parent' => 'Vissza a szülő könyvtárhoz',
    'return_to_parent_label' => 'Eggyel vissza ..',
    'nothing_selected' => 'Nincs kiválasztva fájl.',
    'multiple_selected' => 'Több fájl kiválasztva.',
    'uploading_file_num' => 'Feltöltve :number fájl...',
    'uploading_complete' => 'Feltöltés sikeresen befejezve',
    'uploading_error' => 'Feltöltés sikertelen',
    'type_blocked' => 'A fájltípus blokkolva lett biztonsági okokból.',
    'order_by' => 'Rendezés',
    'direction' => 'Irány',
    'direction_asc' => 'Növekvő',
    'direction_desc' => 'Csökkenő',
    'folder' => 'Könyvtár',
    'no_files_found' => 'Nem található fájl a lekérésben.',
    'delete_empty' => 'Kérjük válassza ki a törölni kívánt fájlokat.',
    'delete_confirm' => 'Valóban törölni akarja a kiválasztott fájlokat?',
    'error_renaming_file' => 'Hiba a fájl átnevezésében.',
    'new_folder_title' => 'Új könyvtár',
    'folder_name' => 'Könyvtár neve',
    'error_creating_folder' => 'Hiba a könyvtár létrehozásánál',
    'folder_or_file_exist' => 'Már létezik ilyen nevű fájl vagy könyvtár.',
    'move_empty' => 'Kérjük válasszon ki fájlt az áthelyezéshez.',
    'move_popup_title' => 'Fájlok vagy könyvtárak áthelyezése',
    'move_destination' => 'Célkönyvtár',
    'please_select_move_dest' => 'Kérjük válasszon célkönyvtárat.',
    'move_dest_src_match' => 'Kérjük válasszon másik célkönyvtárat.',
    'empty_library' => 'Kezdésként hozzon létre könyvtárat és töltsön fel fájlokat.',
    'insert' => 'Beillesztés',
    'crop_and_insert' => 'Vágás és beillesztés',
    'select_single_image' => 'Kérjük válasszon ki egy képet.',
    'selection_not_image' => 'A kiválasztott fájl nem kép.',
    'restore' => 'Összes változtatás visszavonása',
    'resize' => 'Átméretezés...',
    'selection_mode_normal' => 'Normál',
    'selection_mode_fixed_ratio' => 'Rögzített képarány',
    'selection_mode_fixed_size' => 'Rögzített méret',
    'height' => 'Magasság',
    'width' => 'Szélesség',
    'selection_mode' => 'Kiválasztás módja',
    'resize_image' => 'Kép átméretezése',
    'image_size' => 'Kép mérete:',
    'selected_size' => 'Kiválasztva:',
  ],
  'table' => [
    'add_item' => 'Hozzáadás',
  ],
  'dictionary' => [
    'key_required' => 'A kulcs mező megadása kötelező',
    'value_required' => 'Az érték mező megadása kötelező',
  ],
  'uploader' => [
    'uploading' => 'Fájlok feltöltése',
    'complete' => 'Feltöltés kész',
  ],
  'richeditor' => [
    'upload_from_computer' => 'Feltöltés számítógépről',
    'embedding_code' => 'Beágyazási kód',
    'url_required' => 'A webcím megadása kötelező',
    'url_validation' => 'A webcímnek http:// vagy https:// kell kezdődnie',
    'add_image' => 'Kép beszúrása',
    'add_video' => 'Videó beszúrása',
    'add_audio' => 'Audió beszúrása',
    'add_file' => 'Fájl beszúrása',
    'embedding_code_required' => 'A beágyazási kód megadása kötelező',
    'embedding_code_invalid' => 'Adjon meg érvényes HTML beágyazási kódot',
    'embedding_code_invalid_title' => 'Érvénytelen kód',
    'browse' => 'Böngészés a médiában',
    'by_url' => 'Webcím szerint',
  ],
];
