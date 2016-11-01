<?php
/*
* Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <https://pydio.com>.
*/
$mess=array(
"Main"      => "Main Options",
"App Title" => "Application Title",
"Your application title" => "This title will appear as the window title, in the splash screen.",
"Main container for core Pydio settings (application title, sharing, webdav server config, etc...)" => "Main container for core Pydio settings (application title, sharing, webdav server config, etc...)",
"Default Language" => "Default Language",
"Default language when a user does not have set his/her own." => "Default language when a user does not have set his/her own.",
"Sharing" => "Sharing",
"Download Folder (Legacy)" => "Download Folder (Legacy)",
"Absolute path to the public folder where temporary download links will be created. This is used for legacy purpose, newly created links do not use it anymore, but use the Base URI instead." => "Absolute path to the public folder where temporary download links will be created. This is used for legacy purpose, newly created links do not use it anymore, but use the Base URI instead.",
"Download URL" => "Download URL",
"If not inferred directly from the current pydio URL plus the public base URI, replace the public access URL here." => "If not inferred directly from the current pydio URL plus the public base URI, replace the public access URL here.",
"Existing users" => "Existing users",
"Allow the users to pick an existing user when sharing a folder" => "Allow the users to pick an existing user when sharing a folder",
"Compression Features" => "Compression Features",
"Gzip Download" => "Gzip Download",
"Gzip files on-the-fly before downloading. Disabled by default, as it's generally useful only on small files, and decreases performances on big files. This has nothing to see with the Zip Creation feature, it's just a on-the-fly compression applied on a unique file at download." => "Gzip files on-the-fly before downloading. Disabled by default, as it's generally useful only on small files, and decreases performances on big files. This has nothing to see with the Zip Creation feature, it's just a on-the-fly compression applied on a unique file at download.",
"Gzip Limit" => "Gzip Limit",
"If activated, a default limit should be set above when files are no more compressed." => "If activated, a default limit should be set above when files are no more compressed.",
"Zip Creation" => "Zip Creation",
"If you encounter problems with online zip creation or multiple files downloading, you can disable the feature." => "If you encounter problems with online zip creation or multiple files downloading, you can disable the feature.",
"WebDAV Server" => "WebDAV Server",
"Enable WebDAV" => "Enable WebDAV",
"Enable the webDAV support. Please READ THE DOC to safely use this feature." => "Enable the webDAV support. Please READ THE DOC to safely use this feature.",
"Shares URI" => "Shares URI",
"Common URI to access the shares. Please READ THE DOC to safely use this feature." => "Common URI to access the shares. Please READ THE DOC to safely use this feature.",
"Shares Host" => "Shares Host",
"Host used in webDAV protocol. Should be detected by default. Please READ THE DOC to safely use this feature." => "Host used in webDAV protocol. Should be detected by default. Please READ THE DOC to safely use this feature.",
"Digest Realm" => "Digest Realm",
"Default realm for authentication. Please READ THE DOC to safely use this feature." => "Default realm for authentication. Please READ THE DOC to safely use this feature.",
"Miscellaneous" => "Miscellaneous",
"Command-line Active" => "Command-line Active",
"Use Pydio framework via the command line, allowing CRONTAB jobs or background actions." => "Use Pydio framework via the command line, allowing CRONTAB jobs or background actions.",
"Command-line PHP" => "Command-line PHP",
"On specific hosts, you may have to use a specific path to access the php command line" => "On specific hosts, you may have to use a specific path to access the php command line",
"Filename length" => "Filename length",
"Maximum characters length of new files or folders" => "Maximum characters length of new files or folders",
"Temporary Folder" => "Temporary Folder",
"This is necessary only if you have errors concerning the tmp dir access or writeability : most probably, they are due to PHP SAFE MODE (should disappear in php6) or various OPEN_BASEDIR restrictions. In that case, create and set writeable a tmp folder somewhere at the root of your hosting (but above the web/ or www/ or http/ if possible!!) and enter here the full path to this folder" => "This is necessary only if you have errors concerning the tmp dir access or writeability : most probably, they are due to PHP SAFE MODE (should disappear in php6) or various OPEN_BASEDIR restrictions. In that case, create and set writeable a tmp folder somewhere at the root of your hosting (but above the web/ or www/ or http/ if possible!!) and enter here the full path to this folder",
"Admin email" => "Admin email",
"Administrator email, not used for the moment" => "Administrator email, not used for the moment",
"User Credentials" => "User Credentials",
"User" => "User",
"User name - Can be overriden on a per-user basis (see users 'Personal Data' tab)" => "User name - Can be overriden on a per-user basis (see users 'Personal Data' tab)",
"Password" => "Password",
"User password - Can be overriden on a per-user basis." => "User password - Can be overriden on a per-user basis.",
"Session credentials" => "Session credentials",
"Try to use the current Pydio user credentials for connecting. Warning, the AJXP_SESSION_SET_CREDENTIALS config must be set to true!" => "Try to use the current Pydio user credentials for connecting. Warning, the AJXP_SESSION_SET_CREDENTIALS config must be set to true!",
"User name" => "User name",
"User password" => "User password",
"Repository Slug" => "Repository Slug",
"Alias" => "Alias",
"Alias for replacing the generated unique id of the repository" => "Alias for replacing the generated unique id of the workspace",
"Template Options" => "Template Options",
"Allow to user" => "Allow to user",
"Allow non-admin users to create a repository from this template." => "Allow non-admin users to create a workspace from this template.",
"Default Label" => "Default Label",
"Prefilled label for the new repository, you can use the AJXP_USER keyworkd in it." => "Prefilled label for the new workspace, you can use the AJXP_USER keyworkd in it.",
"Small Icon" => "Small Icon",
"16X16 Icon for representing the template" => "16X16 Icon for representing the template",
"Big Icon" => "Big Icon",
"Big Icon for representing the template" => "Big Icon for representing the template",
"Filesystem Commons" => "Filesystem Commons",
"Recycle Bin Folder" => "Recycle Bin Folder",
"Leave empty if you do not want to use a recycle bin." => "Leave empty if you do not want to use a recycle bin.",
"Default Rights" => "Default Rights",
"This right pattern (empty, r, or rw) will be applied at user creation for this repository." => "This right pattern (empty, r, or rw) will be applied at user creation for this workspace.",
"Character Encoding" => "Character Encoding",
"If your server does not set correctly its charset, it can be good to specify it here manually." => "If your server does not set correctly its charset, it can be good to specify it here manually.",
"Pagination Threshold" => "Pagination Threshold",
"When a folder will contain more items than this number, display will switch to pagination mode, for better performances." => "When a folder will contain more items than this number, display will switch to pagination mode, for better performances.",
"#Items per page" => "#Items per page",
"Once in pagination mode, number of items to display per page." => "Once in pagination mode, number of items to display per page.",
"Default Metasources" => "Default Metasources",
"Comma separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Comma separated list of metastore and meta plugins, that will be automatically applied to all workspaces created with this driver",
"Auth Driver Commons" => "Auth Driver Commons",
"Transmit Clear Pass" => "Transmit Clear Pass",
"Whether the password will be transmitted clear or encoded between the client and the server" => "Whether the password will be transmitted clear or encoded between the client and the server",
"Auto Create User" => "Auto Create User",
"When set to true, the user object is created automatically if the authentication succeed. Used by remote authentication systems." => "When set to true, the user object is created automatically if the authentication succeed. Used by remote authentication systems.",
"Login Redirect" => "Login Redirect",
"If set to a given URL, the login action will not trigger the display of login screen but redirect to this URL." => "If set to a given URL, the login action will not trigger the display of login screen but redirect to this URL.",
"Admin Login" => "Admin Login",
"For exotic auth drivers, an user ID that must be considered as admin by default." => "For exotic auth drivers, an user ID that must be considered as admin by default.",
"Show hidden files" => "Show hidden files",
"Show files beginning with a ." => "Show files beginning with a .",
"Hide recycle bin" => "Hide recycle bin",
"Whether to show the recycle bin folder. Unlike in the following options, the folder will be hidden but still writeable." => "Whether to show the recycle bin folder. Unlike in the following options, the folder will be hidden but still writeable.",
"Hide extensions" => "Hide extensions",
"Comma-separated list of extensions to hide. Extensions, files and folders that are hidden are also access forbidden." => "Comma-separated list of extensions to hide. Extensions, files and folders that are hidden are also access forbidden.",
"Hide folders" => "Hide folders",
"Comma-separated list of specific folders to hide" => "Comma-separated list of specific folders to hide",
"Hide files" => "Hide files",
"Comma-separated list of specific files to hide" => "Comma-separated list of specific files to hide",
"Metadata and indexation" => "Metadata and indexation",
"Pydio Main Options" => "Pydio Main Options",
"Server URL" => "Server URL",
"Server URL used to build share links and notifications. It will be detected if empty." => "Server URL used to build share links and notifications. It will be detected if empty.",
"Force Basic Auth" => "Force Basic Auth",
"This authentication mechanism is less secure, but will avoid the users having to re-enter a password in some case." => "This authentication mechanism is less secure, but will avoid the users having to re-enter a password in some case.",
"Browser Access" => "Browser Access",
"Display the list of files and folder when accessing through the browser" => "Display the list of files and folder when accessing through the browser",
"Command Line" => "Command Line",
"Use COM class" => "Use COM class",
"On Windows running IIS, set this option to true if the COM extension is loaded, this may enable the use of the php command line." => "On Windows running IIS, set this option to true if the COM extension is loaded, this may enable the use of the php command line.",
"Disable Zip browsing" => "Disable Zip browsing",
"Disable Zip files inline browsing. This can be necessary if you always store huge zip archives: it can have some impact on performance." => "Disable Zip files inline browsing. This can be necessary if you always store huge zip archives: it can have some impact on performance.",
"Zip Encoding" => "Zip Encoding",
"Set up a specific encoding (try IBM850 or CP437) for filenames to fix characters problems during Zip creation. This may create OS-incompatible archives (Win/Mac)." => "Set up a specific encoding (try IBM850 or CP437) for filenames to fix characters problems during Zip creation. This may create OS-incompatible archives (Win/Mac).",
"Repository Commons" => "Repository Commons",
"Description" => "Description",
"A user-defined description of the content of this workspace" => "A user-defined description of the content of this workspace",
"Group Path" => "Group Path",
"Set this repository group owner : only users of this group will see it" => "Set this repository group owner : only users of this group will see it",
"Disable WebDAV" => "Disable WebDAV",
"Explicitly disable WebDAV access for this repository." => "Explicitly disable WebDAV access for this repository.",
"Allow to group admins" => "Allow to group admins",
"Allow group administrators to create a repository from this template." => "Allow group administrators to create a repository from this template.",
"Skip auto-update admin rights" => "Skip auto-update admin rights",
"If you have tons of workspaces (which is not recommanded), admin users login can take a long time while updating admin access to all repositories. Use this option to disable this step, admin will always have access to the Settings." => "If you have tons of workspaces (which is not recommanded), admin users login can take a long time while updating admin access to all repositories. Use this option to disable this step, admin will always have access to the Settings.",
"Auto apply role" => "Auto apply role",
"For multiple authentication, apply this role to users authenticated via this driver" => "For multiple authentication, apply this role to users authenticated via this driver",
"DSN" => "DSN",
"Data Source Name" => "Data Source Name",
"Host" => "Host",
"Database server" => "Database server",
"Database" => "Database",
"Database name" => "Database name",
"File" => "File",
"Database file" => "Database file",
"Remote Sorting" => "Remote Sorting",
"Force remote sorting when in paginated mode. Warning, this can impact the performances." => "Force remote sorting when in paginated mode. Warning, this can impact the performances.",
"Remote Sorting Default Field" => "Remote Sorting Default Field",
"Default field to sort on" => "Default field to sort on",
"Remote Sorting Default Direction" => "Remote Sorting Default Direction",
"Default sorting direction" => "Default sorting direction",
"Driver" => "Driver",
"Driver type (do not touch)" => "Driver type (do not touch)",
"Use PHP MySQLi extension" => "Use PHP MySQLi extension",
"Use MySQLi" => "Use MySQLi",
"Ascending" => "Ascending",
"Descending" => "Descending",
"Name" => "Name",
"Modification date" => "Modification date",
"File size" => "File size",
"File Type" => "File Type",
"Read Only" => "Read Only",
"Read and Write" => "Read and Write",
"Write Only (upload)" => "Write Only (upload)",
"OAuth Commons" => "OAuth Commons",
"Client ID" => "Client ID",
"Client SECRET" => "Client SECRET",
"Scope" => "Scope",
"Auth URL" => "Auth URL",
"Token URL" => "Token URL",
"Redirect URL" => "Redirect URL",
"API endpoint - Used to launch the window allowing the user to authenticate and accept the terms of the app" => "API endpoint - Used to launch the window allowing the user to authenticate and accept the terms of the app",
"API endpoint - Used to refresh or validate the token retrieved in the authentication part" => "API endpoint - Used to refresh or validate the token retrieved in the authentication part",
"API setting - Redirect URL for the OAuth Application" => "API setting - Redirect URL for the OAuth Application",
"Public Base URI" => "Public Base URI",
"URI where to serve the public links" => "URI where to serve the public links",
"Enable for all users" => "Enable for all users",
"Enable WebDAV for all users by default. If set to false, users will have to manually enable WebDAV via their preferences panel." => "Enable WebDAV for all users by default. If set to false, users will have to manually enable WebDAV via their preferences panel.",
"Download Delegation" => "Download Delegation",
"Delegates download operations to an alternative agent, either webserver or pydio agent. Warning, this requires external modules to be installed. When using XSendFile/XaccelRedirect, you have to manually add the folders where files will be downloaded in the module configuration" => "Delegates download operations to an alternative agent, either webserver or pydio agent. Warning, this requires external modules to be installed. When using XSendFile/XaccelRedirect, you have to manually add the folders where files will be downloaded in the module configuration",
"Core Connexion" => "Core Connexion",
);
