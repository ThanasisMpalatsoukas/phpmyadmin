<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';


$strAPrimaryKey = 'S\'ha afegit una clau prim�ria a %s';
$strAccessDenied = 'Access denegat';
$strAction = 'Acci�';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddNewField = 'Afegir un camp nou';
$strAddPriv = 'Afegir un privilegi nou';
$strAddPrivMessage = 'Has afegit un privilegi nou.';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la cl�usula "where"):';
$strAddToIndex = 'Afegir columna(es) a l\'index %s&nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Despr�s %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAll = 'Tot';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnIndex = 'S\'ha afegit un index a %s';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAny = 'Qualsevol';
$strAnyColumn = 'Qualsevol columna';
$strAnyDatabase = 'Qualsevol base de dades';
$strAnyHost = 'Qualsevol servidor';
$strAnyTable = 'Qualsevol taula';
$strAnyUser = 'Qualsevol usuari';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';

$strBack = 'Enrere';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkDeleted = 'S\'ha esborrat el bookmark.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL registrada';
$strBookmarkThis = 'Registra aquesta consulta SQL';
$strBookmarkView = 'Nom�s mirar';
$strBrowse = 'Navega';
$strBzip = '"comprimit amb bzip"';

$strCantLoadMySQL = 'no s\'ha pogut carregar l\'extensi� de MySQL,<br />bverifiqueu la configuraci� del PHP.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un index a "PRIMARY"!';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de l�nia: \\r';
$strChange = 'Canvi';
$strCheckAll = 'Verificar-ho tot';
$strCheckDbPriv = 'Verifica els privilegis de la base de dades';
$strCheckTable = 'Verifica la taula';
$strColumn = 'Columna';
$strColumnNames = 'Nom de les col&middot;lumnes';
$strCompleteInserts = 'Completar insercions';
$strConfirm = 'Ho vols fer realment ?';
$strCookiesRequired = 'A partir d\'aquest punt es necessari tenir les Cookies activades.';
$strCopyTable = 'Copia taula a (basedades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un index a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou index';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades ';
$strCriteria = 'Criteris';

$strData = 'Dades';
$strDataOnly = 'Nom�s dades';
$strDatabase = 'Base de dades ';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabases = 'bases de dades';
$strDatabasesStats = 'Estad�stiques de les bases de dades';
$strDefault = 'Defecte';
$strDelete = 'Esborrar';
$strDeleteFailed = 'No s\'ha pogut esborrar!';
$strDeleteUserMessage = 'Has esborrat l\'usuari %s.';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDescending = 'Descendent';
$strDisplay = 'Mostrar';
$strDisplayOrder = 'Ordre del llistat:';
$strDoAQuery = 'Fer un "petici� segons exemple" (comod�: "%")';
$strDocu = 'Documentaci�';
$strDoYouReally = 'Realment vols ';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de dades %s';
$strDropTable = 'Esborrar taula';
$strDumpingData = 'Volcant dades de la taula';
$strDynamic = 'din�mic';

$strEdit = 'Editar';
$strEditPrivileges = 'Editar privilegis';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnd = 'Final';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL s�n en llengua anglesa ';
$strError = 'Errada';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps es buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escape';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFixed = 'fixa';
$strFlushTable = 'Flush the table ("FLUSH")'; //to translate
$strFormat = 'Format';
$strFormEmpty = 'Falta un valor al formulari !';
$strFullText = 'Textes sencers';
$strFunction = 'Funci�';

$strGenTime = 'Temps de generaci�';
$strGo = 'Executar';
$strGrants = 'Atorgar';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHomepageSourceforge = 'Plana de desc�rrega del phpMyAdmin a SourceForge';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor �s buit!';

$strIdxFulltext = 'Texte sencer';
$strIfYouWish = 'Si nom�s vols carregar algunes col.lumnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'index %s';
$strIndexName = 'Nom d\'index&nbsp;:';
$strIndexType = 'Tipus d\'index&nbsp;:';
$strIndexes = 'Indexos';
$strInsert = 'Inserta';
$strInsertAsNewRow = 'Insertar com a nova fila';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInsertedRows = 'Files Inserides:';
$strInstructions = 'Instruccions';
$strInUse = 'en use';
$strInvalidName = '"%s" �s una paraula reservada, no es pot fer servir com a nom de base de dades/taula/camp.';

$strKeepPass = 'No canviis la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';

$strLength = 'Longitut';
$strLengthSet = 'Longitut/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de l�nia: \\n';
$strLines = 'L�nies';
$strLinesTerminatedBy = 'Linies terminades per';
$strLocationTextfile = 'Ubicaci� del fitxer de text';
$strLogPassword = 'Contrasenya:';
$strLogUsername = 'Nom d\'Usuari:';
$strLogin = 'Identificaci�';
$strLogout = 'Sortir';

$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un index';
$strMoveTable = 'Mou taula a (base dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informaci� de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNbRecords = 'N�mero de files ';
$strNext = 'Seg�ent';
$strNo = 'No';
$strNoDatabases = 'No hi han Bases de Dades';
$strNoDropDatabases = 'Instrucci� "DROP DATABASE" desactivada.';
$strNoFrames = 'phpMyAdmin �s m�s facil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'index!';
$strNoIndexPartsDefined = 'No s\'han definit patrts de l\'index!';
$strNoModification = 'Sense canvis';
$strNoPassword = 'Sense contrassenya';
$strNoPrivileges = 'Sense privilegis';
$strNoQuery = 'No �s una consulta SQL!';
$strNoRights = 'No tens prou privilegis per visualitzar aquesta informaci�!';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNone = 'Res';
$strNotNumber = 'Aquest valor no �s un n�mero!';
$strNotValidNumber = ' no es un n�mero de col.lumna v�lid!';
$strNull = 'Nul';

$strOftenQuotation = 'Marques sint�ctiques. OPCIONALMENT vol dir que nom�s els camps de tipus char i varchar van "tancats dins" "-aquest car�cter.';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure car�cters especials.';
$strOptionally = 'OPCIONALMENT';
$strOr = 'O';
$strOverhead = 'Overhead'; //to translate

$strPartialText = 'Textes Parcials';
$strPassword = 'Contrasenya';
$strPasswordEmpty = 'La contrasenya �s buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPHPVersion = 'PHP versi�';
$strPmaDocumentation = 'Documentaci� de phpMyAdmin';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Prim�ria';
$strPrimaryKey = 'Clau Prim�ria';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>nom�s</b>el nom de la clau principal!)';
$strPrintView = 'Imprimir vista';
$strPrivileges = 'Privilegis';
$strProperties = 'Propietats';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';

$strRecords = 'Registres';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strRememberReload = 'Recorda reiniciar el MySQL';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substitu�r';
$strReplaceTable = 'Substitu�r les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strReType = 'Re-escriure';
$strRevoke = 'Revocar';
$strRevokeGrant = 'Revocar garantia';
$strRevokeGrantMessage = 'Has revocat la garantia de privilegis per a %s';
$strRevokeMessage = 'Has revocat els privilegis per %s';
$strRevokePriv = 'Revocar privilegis';
$strRowLength = 'Longitud de fila';
$strRows = 'Fila';
$strRowsFrom = 'Files comen�ant des de';
$strRowSize = ' tamany de fila ';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions=" en modus %s i repeteix cap�aleres despr�s de %s cel.les ";
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad�stica de files';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunning = 'funcionant a %s';

$strSave = 'Guardar';
$strSelect = 'Sel&middot;lecciona';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Sel&middot;lecciona els camps (un com a m�nim):';
$strSelectNumRows = 'en consulta';
$strSend = 'enviar';
$strSequence = 'Seq.';
$strServerChoice = 'Elecci� de Servidor';
$strServerVersion = 'Versi� del servidor';
$strSetEnumVal = 'Si el tipus de camp es "enum" o "set", entra els valors fen servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowCols = 'Mostra columnes';
$strShowPHPInfo = 'Mostra informaci� de PHP';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strShowingRecords = 'Mostrant registres: ';
$strSingly = '(singly)';
$strSize = 'Mida';
$strSort = 'Clasificaci�';
$strSpaceUsage = 'Utilitzaci� d\'espai';
$strSQLQuery = 'crida SQL';
$strStartingRecord = 'Registre inicial';
$strStatement = 'Sent�ncies';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir \'drop table\'';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucOnly = 'Nom�s l\'estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb �xit';
$strSum = 'Suma';

$strTable = 'taula ';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula �s buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'Table %s has been flushed';  //to translate
$strTableMaintenance = 'Manteniment de la taula';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTables = '%s taula(es)';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substitu�r� els continguts de les taules sel&middot;leccionades a les files que contenen la mateixa clau �nica o prim�ria';
$strTheTerminator = 'El separador de camps.';
$strTotal = 'total';
$strType = 'Tipus';

$strUncheckAll = 'Descel.leccionar tot';
$strUnique = '�nica';
$strUnselectAll = 'Deselecciona Tot';
$strUpdatePrivMessage = 'Heu actualitzat els privilegis de %s.';
$strUpdateProfile = 'Actualitza perfil:';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUsage = '�s';
$strUseBackquotes = 'Usa "backquotes" amb taules i noms de camps';
$strUser = 'Usuari';
$strUserEmpty = 'El nom d\'usuari �s buit!';
$strUserName = 'Nom d\'usuari';
$strUsers = 'Usuaris';
$strUseTables = 'Usa Taules';

$strValue = 'Valor';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';

$strWelcome = 'Benvingut a %s';
$strWithChecked = 'Amb marca:';
$strWrongUser = 'Usuari i/o clau erronis. Access denegat.';

$strYes = 'Si';

$strZip = '"comprimit amb zip"';

// To translate
?>
