<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavení',
    'settings_save' => 'Uložit nastavení',
    'system_version' => 'Verze systému: ',
    'categories' => 'Kategorie',

    // App Settings
    'app_customization' => 'Přizpůsobení',
    'app_features_security' => 'Funkce a zabezpečení',
    'app_name' => 'Název aplikace',
    'app_name_desc' => 'Název se bude zobrazovat v záhlaví této aplikace a v e-mailech odesílaných systémem.',
    'app_name_header' => 'Zobrazovat název aplikace v záhlaví',
    'app_public_access' => 'Veřejný přístup',
    'app_public_access_desc' => 'Zapnutím této volby umožníte nepřihlášeným návštěvníkům přístup k Vašemu obsahu v BookStack aplikaci.',
    'app_public_access_desc_guest' => 'Přístup pro nepřihlášené návštěvníky je možné nastavit přes uživatele "Guest".',
    'app_public_access_toggle' => 'Povolit veřejný přístup',
    'app_public_viewing' => 'Povolit prohlížení veřejností?',
    'app_secure_images' => 'Nahrávat obrázky neveřejně a zabezpečeně',
    'app_secure_images_toggle' => 'Zapnout bezpečnější nahrávání obrázků',
    'app_secure_images_desc' => 'Z výkonnostních důvodů jsou všechny obrázky veřejně dostupné. Tato volba přidá do adresy obrázku náhodný řetězec, aby nikdo neodhadnul adresu obrázku. Ujistěte se, že server nezobrazuje v adresáři seznam souborů, což by přístup k obrázkům opět otevřelo.',
    'app_default_editor' => 'Výchozí editor',
    'app_default_editor_desc' => 'Vyberte, který editor bude použit ve výchozím nastavení při úpravách nových stránek. To může být přepsáno na úrovni stránky, kde to dovolují oprávnění.',
    'app_custom_html' => 'Vlastní obsah hlavičky HTML',
    'app_custom_html_desc' => 'Cokoliv sem napíšete bude přidáno na konec sekce <head> v každém místě této aplikace. To se hodí pro přidávání nebo změnu CSS stylů nebo přidání kódu pro analýzu používání (např.: google analytics.).',
    'app_custom_html_disabled_notice' => 'Na této stránce nastavení je zakázán vlastní obsah HTML hlavičky, aby bylo zajištěno, že bude možné vrátit případnou problematickou úpravu.',
    'app_logo' => 'Logo aplikace',
    'app_logo_desc' => 'Používá se v záhlaví aplikace, a v jiných oblastech. Tento obrázek by měl být velký 86px. Větší obrázky budou zmenšeny.',
    'app_icon' => 'Ikona aplikace',
    'app_icon_desc' => 'Tato ikona se používá pro záložky prohlížeče a ikony zástupců. Obrazek by měl být čtverec o velikosti 256px a formátu PNG.',
    'app_homepage' => 'Úvodní stránka aplikace',
    'app_homepage_desc' => 'Zvolte si zobrazení, které se použije jako úvodní stránka. U zvolených stránek bude ignorováno jejich oprávnění.',
    'app_homepage_select' => 'Zvolte stránku',
    'app_footer_links' => 'Odkazy v zápatí',
    'app_footer_links_desc' => 'Přidejte odkazy, které se zobrazí v zápatí webu. Ty se zobrazí ve spodní části většiny stránek, včetně těch, které nevyžadují přihlášení. K použití překladů definovaných systémem můžete použít štítek „trans::<key>“. Například: Použití „trans::common.privacy_policy“ přeloží text na „Zásady ochrany osobních údajů“ a „trans::common.terms_of_service“ poskytne přeložený text „Podmínky služby“.',
    'app_footer_links_label' => 'Text odkazu',
    'app_footer_links_url' => 'URL odkazu',
    'app_footer_links_add' => 'Přidat odkaz do zápatí',
    'app_disable_comments' => 'Vypnutí komentářů',
    'app_disable_comments_toggle' => 'Vypnout komentáře',
    'app_disable_comments_desc' => 'Vypne komentáře napříč všemi stránkami. <br> Existující komentáře se přestanou zobrazovat.',

    // Color settings
    'color_scheme' => 'Barevné schéma aplikace',
    'color_scheme_desc' => 'Nastavte barvy pro uživatelské rozhraní. Barvy mohou být konfigurovány samostatně pro tmavý a světlý režim, aby co nejlépe odpovídaly tématu a zajistily čitelnost.',
    'ui_colors_desc' => 'Nastavte primární barvu aplikace a výchozí barvu odkazu. Primární barva je použitá hlavně na banneru hlavičky, tlačítkách a ozdobách rozhraní. Výchozí barva odkazu se používá pro odkazy a akce napříč psaným textem a rozhraním aplikace.',
    'app_color' => 'Hlavní barva',
    'link_color' => 'Výchozí barva odkazu',
    'content_colors_desc' => 'Nastaví barvy pro všechny prvky v organizační struktuře stránky. Pro lepší čitelnost doporučujeme zvolit barvy s podobným jasem, jakou mají výchozí barvy.',
    'bookshelf_color' => 'Barva knihovny',
    'book_color' => 'Barva knihy',
    'chapter_color' => 'Barva kapitoly',
    'page_color' => 'Barva stránky',
    'page_draft_color' => 'Barva návrhu stránky',

    // Registration Settings
    'reg_settings' => 'Nastavení registrace',
    'reg_enable' => 'Povolení registrace',
    'reg_enable_toggle' => 'Povolit registrace',
    'reg_enable_desc' => 'Pokud jsou povoleny registrace, bude se uživatel moci sám registrovat jako uživatel aplikace. Po registraci dostane jednu výchozí uživatelskou roli.',
    'reg_default_role' => 'Role přiřazená po registraci',
    'reg_enable_external_warning' => 'Pokud je povolené externí ověřování přes LDAP nebo SAML, je výše uvedená možnost ignorována. Uživatelský účet budou automaticky vytvořen i neexistujícímu uživateli, jakmile se úspěšně přihlásí přes použitý externí přihlašovací systém.',
    'reg_email_confirmation' => 'Ověření e-mailu',
    'reg_email_confirmation_toggle' => 'Vyžadovat ověření e-mailu',
    'reg_confirm_email_desc' => 'Pokud je zapnuté Omezení registrace podle domény, bude e-mail ověřován vždy a tato volba bude ignorována.',
    'reg_confirm_restrict_domain' => 'Omezit registraci podle domény',
    'reg_confirm_restrict_domain_desc' => 'Zadejte seznam e-mailových domén oddělených čárkami, na které chcete registraci omezit. Registrujícímu se uživateli bude zaslán e-mail, aby ověřil svoji e-mailovou adresu před tím, než mu bude přístup do aplikace povolen. <br> Upozorňujeme, že po úspěšné registraci může uživatel svoji e-mailovou adresu změnit.',
    'reg_confirm_restrict_domain_placeholder' => 'Žádná omezení nebyla nastavena',

    // Maintenance settings
    'maint' => 'Údržba',
    'maint_image_cleanup' => 'Pročistění obrázků',
    'maint_image_cleanup_desc' => 'Prohledá stránky a jejich revize, aby zjistil, které obrázky a kresby jsou momentálně používány a které jsou zbytečné. Zajistěte plnou zálohu databáze a obrázků než se do toho pustíte.',
    'maint_delete_images_only_in_revisions' => 'Odstranit i obrázky, které se vyskytují pouze ve starých revizích stránky',
    'maint_image_cleanup_run' => 'Spustit pročištění',
    'maint_image_cleanup_warning' => 'Nalezeno :count potenciálně nepoužitých obrázků. Jste si jisti, že je chcete odstranit?',
    'maint_image_cleanup_success' => 'Nalezeno :count potenciálně nepoužitých obrázků a všechny byly odstraněny!',
    'maint_image_cleanup_nothing_found' => 'Žádné potenciálně nepoužité obrázky nebyly nalezeny. Nic nebylo smazáno.',
    'maint_send_test_email' => 'Odeslat zkušební e-mail',
    'maint_send_test_email_desc' => 'Toto pošle zkušební e-mail na vaši e-mailovou adresu uvedenou ve vašem profilu.',
    'maint_send_test_email_run' => 'Odeslat zkušební e-mail',
    'maint_send_test_email_success' => 'E-mail odeslán na :address',
    'maint_send_test_email_mail_subject' => 'Testovací e-mail',
    'maint_send_test_email_mail_greeting' => 'Zdá se, že posílání e-mailů funguje!',
    'maint_send_test_email_mail_text' => 'Gratulujeme! Protože jste dostali tento e-mail, zdá se, že nastavení e-mailů je v pořádku.',
    'maint_recycle_bin_desc' => 'Odstraněné knihovny, knihy, kapitoly a stránky se přesouvají do Koše, aby je bylo možné obnovit nebo trvale smazat. Starší položky v koši mohou být po čase automaticky odstraněny v závislosti na konfiguraci systému.',
    'maint_recycle_bin_open' => 'Otevřít Koš',
    'maint_regen_references' => 'Přegenerovat odkazy',
    'maint_regen_references_desc' => 'Tato akce obnoví referenční index křížových položek v rámci databáze. Toto je obvykle zpracováno automaticky, ale tato akce může být užitečná pro indexování starého obsahu nebo obsahu přidaného neoficiálními metodami.',
    'maint_regen_references_success' => 'Referenční index byl obnoven!',
    'maint_timeout_command_note' => 'Poznámka: Tato akce může trvat nějakou dobu, což může vést k vypršení časového limitu v některých webových prostředích. Alternativně se tato akce provádí pomocí příkazu terminálu.',

    // Recycle Bin
    'recycle_bin' => 'Koš',
    'recycle_bin_desc' => 'Zde můžete obnovit položky, které byly odstraněny, nebo zvolit jejich trvalé odstranění ze systému. Tento seznam je nefiltrovaný, na rozdíl od podobných seznamů aktivit v systému, kde jsou použity filtry podle oprávnění.',
    'recycle_bin_deleted_item' => 'Odstraněná položka',
    'recycle_bin_deleted_parent' => 'Nadřazená položka',
    'recycle_bin_deleted_by' => 'Odstranil/a',
    'recycle_bin_deleted_at' => 'Čas odstranění',
    'recycle_bin_permanently_delete' => 'Trvale odstranit',
    'recycle_bin_restore' => 'Obnovit',
    'recycle_bin_contents_empty' => 'Koš je nyní prázdný',
    'recycle_bin_empty' => 'Vysypat Koš',
    'recycle_bin_empty_confirm' => 'Toto trvale odstraní všechny položky v Koši včetně obsahu vloženého v každé položce. Opravdu chcete vysypat Koš?',
    'recycle_bin_destroy_confirm' => 'Tato akce trvale odstraní ze systému tuto položku spolu s veškerým vloženým obsahem a tento obsah nebudete moci obnovit. Opravdu chcete tuto položku trvale odstranit?',
    'recycle_bin_destroy_list' => 'Položky k trvalému odstranění',
    'recycle_bin_restore_list' => 'Položky k obnovení',
    'recycle_bin_restore_confirm' => 'Tato akce obnoví odstraněnou položku včetně veškerého vloženého obsahu do původního umístění. Pokud bylo původní umístění od té doby odstraněno a nyní je v Koši, bude také nutné obnovit nadřazenou položku.',
    'recycle_bin_restore_deleted_parent' => 'Nadřazená položka této položky byla také odstraněna. Ty zůstanou odstraněny, dokud nebude obnoven i nadřazený objekt.',
    'recycle_bin_restore_parent' => 'Obnovit nadřazenu položku',
    'recycle_bin_destroy_notification' => 'Celkem odstraněno :count položek z Koše.',
    'recycle_bin_restore_notification' => 'Celkem obnoveno :count položek z Koše.',

    // Audit Log
    'audit' => 'Protokol auditu',
    'audit_desc' => 'Tento protokol auditu zobrazuje seznam činností zaznamenaných v systému. Tento seznam není filtrován na rozdíl od podobných seznamů aktivit v systému, kde jsou použity filtry podle oprávnění.',
    'audit_event_filter' => 'Filtr událostí',
    'audit_event_filter_no_filter' => 'Bez filtru',
    'audit_deleted_item' => 'Odstraněná položka',
    'audit_deleted_item_name' => 'Jméno: :name',
    'audit_table_user' => 'Uživatel',
    'audit_table_event' => 'Událost',
    'audit_table_related' => 'Související položka nebo detail',
    'audit_table_ip' => 'IP adresa',
    'audit_table_date' => 'Datum aktivity',
    'audit_date_from' => 'Časový rozsah od',
    'audit_date_to' => 'Časový rozsah do',

    // Role Settings
    'roles' => 'Role',
    'role_user_roles' => 'Uživatelské role',
    'roles_index_desc' => 'Role se používají ke sdružování uživatelů a k poskytování systémových oprávnění jejich členům. Pokud je uživatel členem více rolí, udělená oprávnění budou uložena a uživatel zdědí všechny schopnosti.',
    'roles_x_users_assigned' => '1 přiřazený uživatel|:count přiřazených uživatelů',
    'roles_x_permissions_provided' => '1 oprávnění|:count oprávnění',
    'roles_assigned_users' => 'Přiřazení uživatelé',
    'roles_permissions_provided' => 'Poskytnutá oprávnění',
    'role_create' => 'Vytvořit novou roli',
    'role_delete' => 'Odstranit roli',
    'role_delete_confirm' => 'Role \':roleName\' bude odstraněna.',
    'role_delete_users_assigned' => 'Role je přiřazena :userCount uživatelům. Pokud jim chcete náhradou přidělit jinou roli, zvolte jednu z následujících.',
    'role_delete_no_migration' => "Nepřiřazovat uživatelům náhradní roli",
    'role_delete_sure' => 'Opravdu chcete tuto roli odstranit?',
    'role_edit' => 'Upravit roli',
    'role_details' => 'Detaily role',
    'role_name' => 'Název role',
    'role_desc' => 'Stručný popis role',
    'role_mfa_enforced' => 'Vyžaduje Vícefaktorové ověření',
    'role_external_auth_id' => 'Přihlašovací identifikátory třetích stran',
    'role_system' => 'Systémová oprávnění',
    'role_manage_users' => 'Správa uživatelů',
    'role_manage_roles' => 'Správa rolí a jejich práv',
    'role_manage_entity_permissions' => 'Správa práv všech knih, kapitol a stránek',
    'role_manage_own_entity_permissions' => 'Správa práv vlastních knih, kapitol a stránek',
    'role_manage_page_templates' => 'Správa šablon stránek',
    'role_access_api' => 'Přístup k systémovému API',
    'role_manage_settings' => 'Správa nastavení aplikace',
    'role_export_content' => 'Exportovat obsah',
    'role_editor_change' => 'Změnit editor stránek',
    'role_notifications' => 'Receive & manage notifications',
    'role_asset' => 'Obsahová oprávnění',
    'roles_system_warning' => 'Berte na vědomí, že přístup k některému ze tří výše uvedených oprávnění může uživateli umožnit změnit svá vlastní oprávnění nebo oprávnění ostatních uživatelů v systému. Přiřazujte role s těmito oprávněními pouze důvěryhodným uživatelům.',
    'role_asset_desc' => 'Tato oprávnění řídí přístup k obsahu napříč systémem. Specifická oprávnění na knihách, kapitolách a stránkách převáží tato nastavení.',
    'role_asset_admins' => 'Administrátoři automaticky dostávají přístup k veškerému obsahu, ale tyto volby mohou ukázat nebo skrýt volby v uživatelském rozhraní.',
    'role_asset_image_view_note' => 'To se týká viditelnosti ve správci obrázků. Skutečný přístup k nahraným souborům obrázků bude záviset na možnosti uložení systémových obrázků.',
    'role_all' => 'Vše',
    'role_own' => 'Vlastní',
    'role_controlled_by_asset' => 'Řídí se obsahem, do kterého jsou nahrávány',
    'role_save' => 'Uložit roli',
    'role_users' => 'Uživatelé mající tuto roli',
    'role_users_none' => 'Žádný uživatel nemá tuto roli',

    // Users
    'users' => 'Uživatelé',
    'users_index_desc' => 'Vytváření a správa jednotlivých uživatelských účtů v rámci systému. Uživatelské účty jsou používány pro přihlášení a přiřazování obsahu a aktivity. Přístupová práva jsou primárně založena na roli, ale vlastnictví obsahu uživatele může kromě jiných faktorů také ovlivnit oprávnění a přístup.',
    'user_profile' => 'Profil uživatele',
    'users_add_new' => 'Přidat nového uživatele',
    'users_search' => 'Vyhledávání uživatelů',
    'users_latest_activity' => 'Nedávná aktivita',
    'users_details' => 'Údaje o uživateli',
    'users_details_desc' => 'Nastavte zobrazované jméno a e-mailovou adresu pro tohoto uživatele. E-mailová adresa bude použita pro přihlášení do aplikace.',
    'users_details_desc_no_email' => 'Nastavte zobrazované jméno pro tohoto uživatele, aby jej ostatní uživatele poznali.',
    'users_role' => 'Uživatelské role',
    'users_role_desc' => 'Zvolte role, do kterých chcete uživatele zařadit. Pokud bude uživatel zařazen do více rolí, oprávnění z těchto rolí se sloučí a uživateli bude dovoleno vše, k čemu mají jednotlivé role oprávnění.',
    'users_password' => 'Heslo uživatele',
    'users_password_desc' => 'Zadejte heslo pro přihlášení do aplikace. Heslo musí být nejméně 8 znaků dlouhé.',
    'users_send_invite_text' => 'Uživateli můžete poslat pozvánku e-mailem, která umožní uživateli, aby si zvolil sám svoje heslo do aplikace a nebo můžete zadat heslo sami.',
    'users_send_invite_option' => 'Poslat uživateli pozvánku e-mailem',
    'users_external_auth_id' => 'Přihlašovací identifikátor třetích stran',
    'users_external_auth_id_desc' => 'ID použité pro rozpoznání tohoto uživatele když komunikuje s externím přihlašovacím systémem.',
    'users_password_warning' => 'Vyplňujte pouze v případě, že chcete heslo změnit.',
    'users_system_public' => 'Symbolizuje každého nepřihlášeného návštěvníka, který navštívil aplikaci. Nelze ho použít k přihlášení ale je přiřazen automaticky nepřihlášeným.',
    'users_delete' => 'Odstranit uživatele',
    'users_delete_named' => 'Odstranit uživatele :userName',
    'users_delete_warning' => 'Uživatel \':userName\' bude zcela odstraněn ze systému.',
    'users_delete_confirm' => 'Opravdu chcete tohoto uživatele smazat?',
    'users_migrate_ownership' => 'Převést vlastnictví',
    'users_migrate_ownership_desc' => 'Zde zvolte jiného uživatele, pokud chcete, aby se stal vlastníkem všech položek aktuálně vlastněných tímto uživatelem.',
    'users_none_selected' => 'Nebyl zvolen žádný uživatel',
    'users_edit' => 'Upravit uživatele',
    'users_edit_profile' => 'Upravit profil',
    'users_avatar' => 'Obrázek uživatele',
    'users_avatar_desc' => 'Zvolte obrázek, který bude reprezentovat tohoto uživatele. Měl by být přibližně 256px velký ve tvaru čtverce.',
    'users_preferred_language' => 'Preferovaný jazyk',
    'users_preferred_language_desc' => 'Tato volba ovlivní pouze jazyk používaný v uživatelském rozhraní aplikace. Volba nemá vliv na žádný uživateli vytvářený obsah.',
    'users_social_accounts' => 'Sociální účty',
    'users_social_accounts_info' => 'Zde můžete přidat vaše účty ze sociálních sítí pro pohodlnější přihlašování. Odpojení účtů neznamená, že tato aplikace ztratí práva číst detaily z vašeho účtu. Zakázat této aplikaci přístup k detailům vašeho účtu musíte přímo ve svém profilu na dané sociální síti.',
    'users_social_connect' => 'Připojit účet',
    'users_social_disconnect' => 'Odpojit účet',
    'users_social_connected' => 'Účet :socialAccount byl připojen k vašemu profilu.',
    'users_social_disconnected' => 'Účet :socialAccount byl odpojen od vašeho profilu.',
    'users_api_tokens' => 'API Tokeny',
    'users_api_tokens_none' => 'Tento uživatel nemá vytvořené žádné API Tokeny',
    'users_api_tokens_create' => 'Vytvořit Token',
    'users_api_tokens_expires' => 'Vyprší',
    'users_api_tokens_docs' => 'Dokumentace API',
    'users_mfa' => 'Vícefázové ověření',
    'users_mfa_desc' => 'Nastavit vícefaktorové ověřování jako další vrstvu zabezpečení vašeho uživatelského účtu.',
    'users_mfa_x_methods' => ':count nastavená metoda|:count nastavených metod',
    'users_mfa_configure' => 'Konfigurovat metody',

    // API Tokens
    'user_api_token_create' => 'Vytvořit API Token',
    'user_api_token_name' => 'Název',
    'user_api_token_name_desc' => 'Zadejte srozumitelný název tokenu, který vám později může pomoci připomenout účel, za jakým jste token vytvářeli.',
    'user_api_token_expiry' => 'Platný do',
    'user_api_token_expiry_desc' => 'Zadejte datum, kdy platnost tokenu vyprší. Po tomto datu nebudou požadavky, které používají tento token, fungovat. Pokud ponecháte pole prázdné, bude tokenu nastavena platnost na dalších 100 let.',
    'user_api_token_create_secret_message' => 'Ihned po vytvoření tokenu Vám bude vygenerován a zobrazen "Token ID" a "Token Secret". Upozorňujeme, že "Token Secret" bude možné zobrazit pouze jednou, ujistěte se, že si jej poznamenáte a uložíte na bezpečné místo před tím, než budete pokračovat dále.',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Toto je neupravitelný systémový identifikátor generovaný pro tento Token, který musí být uveden v API requestu.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Toto je systémem generovaný "Secret" pro tento Token, který musí být v API requestech. Toto bude zobrazeno pouze jednou, takže si uložte tuto hodnotu na bezpečné místo.',
    'user_api_token_created' => 'Token vytvořen :timeAgo',
    'user_api_token_updated' => 'Token aktualizován :timeAgo',
    'user_api_token_delete' => 'Odstranit Token',
    'user_api_token_delete_warning' => 'Tímto plně odstraníte tento API Token s názvem \':tokenName\' ze systému.',
    'user_api_token_delete_confirm' => 'Opravdu chcete odstranit tento API Token?',

    // Webhooks
    'webhooks' => 'Webhooky',
    'webhooks_index_desc' => 'Webhooks jsou způsob, jak odeslat data na externí URL, pokud se vyskytnou určité akce a události v systému, které umožňují integraci událostí s externími platformami, jako jsou systémy zasílání zpráv nebo oznámení.',
    'webhooks_x_trigger_events' => '1 spouštěcí událost|:count spouštěcích událostí',
    'webhooks_create' => 'Vytvořit nový webhook',
    'webhooks_none_created' => 'Žádné webhooky nebyly doposud vytvořeny.',
    'webhooks_edit' => 'Upravit webhook',
    'webhooks_save' => 'Uložit webhook',
    'webhooks_details' => 'Podrobnosti webhooku',
    'webhooks_details_desc' => 'Zadejte uživatelsky přívětivé jméno a koncový bod POST jako umístění pro zasílání dat webhooku.',
    'webhooks_events' => 'Události webhooku',
    'webhooks_events_desc' => 'Vyberte všechny události, které by měly spustit tento webhook pro volání.',
    'webhooks_events_warning' => 'Mějte na paměti, že tyto události budou spouštěny pro všechny vybrané události, i když budou použita vlastní oprávnění. Zajistěte, aby používání tohoto webového háčku nezobrazovalo důvěrné obsahy.',
    'webhooks_events_all' => 'Všechny události systému',
    'webhooks_name' => 'Název webhooku',
    'webhooks_timeout' => 'Časový limit požadavku Webhook (sekundy)',
    'webhooks_endpoint' => 'Koncový bod webhooku',
    'webhooks_active' => 'Webhook aktivní',
    'webhook_events_table_header' => 'Události',
    'webhooks_delete' => 'Odstranit webhook',
    'webhooks_delete_warning' => 'Webhook s názvem \':webhookName\' bude úplně odstraněn ze systému.',
    'webhooks_delete_confirm' => 'Opravdu chcete odstranit tento webhook?',
    'webhooks_format_example' => 'Příklad formátu webhooku',
    'webhooks_format_example_desc' => 'Webový háček je odesílán jako POST požadavek na konfigurovaný koncový bod ve formátu JSON ve formátu níže. Vlastnosti "related_item" a "url" jsou volitelné a budou záviset na typu události spuštěné.',
    'webhooks_status' => 'Stav webhooku',
    'webhooks_last_called' => 'Poslední volání:',
    'webhooks_last_errored' => 'Poslední chyba:',
    'webhooks_last_error_message' => 'Poslední chybová zpráva',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
