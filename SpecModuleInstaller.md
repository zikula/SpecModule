Filename: `<Name><Type>Installer.php` (can be changed if method `getInstallerClass` is overridden in Bundle class.)

Status: Required

Must: `implements ExtensionInstallerInterface`

Description: implement required methods to manage installation, upgrade and uninstall of the extension. One may 
optionally `implements ContainerAwareInterface` to gain access to the container services and parameters.
