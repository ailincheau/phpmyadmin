<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAPrimaryKey = 'S\'ha afegit una clau prim&agrave;ria a %s';
$strAccessDenied = 'Acc&eacute;s denegat';
$strAction = 'Acci&oacute;';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddNewField = 'Afegir un camp nou';
$strAddPriv = 'Afegir un privilegi nou';
$strAddPrivMessage = 'Has afegit un privilegi nou.';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la cl&agrave;usula "where"):';
$strAddToIndex = 'Afegir columna(es) a l\'&iacute;ndex %s&nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Despr&eacute;s %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAll = 'Tot';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnIndex = 'S\'ha afegit un &iacute;ndex a %s';
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
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL VOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkDeleted = 'S\'ha esborrat el bookmark.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL registrada';
$strBookmarkThis = 'Registra aquesta consulta SQL';
$strBookmarkView = 'Nom&eacute;s mirar';
$strBrowse = 'Navega';
$strBzip = '"comprimit amb bzip"';

$strCantLoadMySQL = 'no s\'ha pogut carregar l\'extensi&oacute; de MySQL,<br />verifiqueu la configuraci&oacute; del PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensi&oacute; necess&agrave;ria per la conversi&oacute; de jocs de car&agrave;cters, configura php per permetre l\'&uacute;s d\'aquestes extensions o b&eacute; desactiva la conversi&oacute; de jocs de car&agrave;cters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un &iacute;ndex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funci&oacute; recode_string mentre es carrega l\'extensi&oacute; d\'informes. Comprova la configuraci&oacute; de php.';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de l&iacute;nia: \\r';
$strChange = 'Canvi';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharsetOfFile = 'Joc de car&agrave;cters de l\'arxiu:';
$strCheckAll = 'Verificar-ho tot';
$strCheckDbPriv = 'Verifica els privilegis de la base de dades';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una p&agrave;gina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strColumn = 'Columna';
$strColumnNames = 'Nom de les columnes';
$strComments = 'Comentaris';
$strCompleteInserts = 'Completar insercions';
$strConfigFileError = 'phpMyAdmin &eacute;s incapa� de llegir el fitxer de configuraci&oacute;!<br />Aix&ograve; pot succeir si php troba un error sint&agrave;ctic en ell o b&eacute; php no pot trobar el fitxer.<br />Intenta obrir el fitxer de configuraci&oacute; directament fent servir l\'enlla� seg�ent i comprova el(s) missatge(s) d\'error que reps. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si reps una plana en blanc, tot est&agrave; b&eacute;.';
$strConfigureTableCoord = 'Configura les coordenades per la taula %s';
$strConfirm = 'Ho vols fer realment?';
$strCookiesRequired = 'A partir d\'aquest punt &eacute;s necessari tenir les Cookies activades.';
$strCopyTable = 'Copia taula a (basedades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un &iacute;ndex a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou &iacute;ndex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova P&agrave;gina';
$strCreatePdfFeat = 'Creaci&oacute; de PDFs';
$strCriteria = 'Criteris';

$strData = 'Dades';
$strDatabase = 'Base de dades ';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabaseWildcard = 'Bases de Dades (es permeten comodins):';
$strDatabases = 'bases de dades';
$strDatabasesStats = 'Estad&iacute;stiques de les bases de dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Nom&eacute;s dades';
$strDefault = 'Defecte';
$strDelete = 'Esborrar';
$strDeleteFailed = 'No s\'ha pogut esborrar!';
$strDeleteUserMessage = 'Has esborrat l\'usuari %s.';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDescending = 'Descendent';
$strDisabled = 'Desactivat';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar caracter&iacute;stiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petici&oacute; segons exemple" (comod&iacute;: "%")';
$strDoYouReally = 'Realment vols';
$strDocu = 'Documentaci&oacute;';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de dades %s';
$strDropTable = 'Esborrar taula';
$strDumpXRows = 'Volcar %s files comen�ant a la fila %s.';
$strDumpingData = 'Volcant dades de la taula';
$strDynamic = 'din&agrave;mic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar p&agrave;gines PDF';
$strEditPrivileges = 'Editar privilegis';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEnd = 'Final';
$strEndCut = 'FI DEL TALL';
$strEndRaw = 'FI DEL VOLCAT';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL s&oacute;n en llengua anglesa ';
$strError = 'Errada';
$strExplain = 'Explicaci&oacute; de l\'SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a format XML';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps &eacute;s buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escapada';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFixed = 'fixa';
$strFlushTable = 'Buidar el cach&eacute; de la taula ("FLUSH")';
$strFormEmpty = 'Falta un valor al formulari !';
$strFormat = 'Format';
$strFullText = 'Textos sencers';
$strFunction = 'Funci&oacute;';

$strGenBy = 'Generat per';
$strGenTime = 'Temps de generaci&oacute;';
$strGeneralRelationFeat = 'Caracter&iacute;stiques generals de relacions';
$strGo = 'Executar';
$strGrants = 'Atorgar';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has d\'escollir al menys una columna per mostrar';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHomepageSourceforge = 'Plana de desc&agrave;rrega del phpMyAdmin a SourceForge';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor &eacute;s buit!';

$strIdxFulltext = 'Text sencer';
$strIfYouWish = 'Si nom&eacute;s vols carregar algunes columnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strImportDocSQL = 'Importa Arxius docSQL';
$strInUse = 'en &uacute;s';
$strIndex = '&Iacute;ndex';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'&iacute;ndex %s';
$strIndexName = 'Nom d\'&iacute;ndex:';
$strIndexType = 'Tipus d\'&iacute;ndex:';
$strIndexes = 'Indexos';
$strInsecureMySQL = 'El vostre fitxer de configuraci&oacute; t&eacute; par&agrave;metres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL est&agrave; funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparaci&oacute; urgent d\'aquest forat de seguretat.';
$strInsert = 'Inserta';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInsertedRows = 'Files Inserides:';
$strInstructions = 'Instruccions';
$strInvalidName = '"%s" &eacute;s una paraula reservada, no es pot fer servir com a nom de base de dades/taula/camp.';

$strKeepPass = 'No canvi�s la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';

$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de l&iacute;nia: \\n';
$strLines = 'L&iacute;nies';
$strLinesTerminatedBy = 'L&iacute;nies terminades per';
$strLinkNotFound = 'L\'enlla� no s\'ha trobat';
$strLinksTo = 'Enlla�os a';
$strLocationTextfile = 'Ubicaci&oacute; del fitxer de text';
$strLogPassword = 'Contrasenya:';
$strLogUsername = 'Nom d\'Usuari:';
$strLogin = 'Identificaci&oacute;';
$strLogout = 'Sortir';

$strMissingBracket = 'Falta una clau (\{ o b&eacute; \})';
$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un &iacute;ndex';
$strMoveTable = 'Mou taula a (base dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMySQLCharset = 'Joc de car&agrave;cters de MySQL';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informaci&oacute; de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Seg�ent';
$strNo = 'No';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDescription = 'Sense Descripci&oacute;';
$strNoDropDatabases = 'Instrucci&oacute; "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicaci&oacute; de l\'SQL';
$strNoFrames = 'phpMyAdmin &eacute;s m&eacute;s f&agrave;cil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'&iacute;ndex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'&iacute;ndex!';
$strNoModification = 'Sense canvis';
$strNoPassword = 'Sense contrasenya';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense privilegis';
$strNoQuery = 'No &eacute;s una consulta SQL!';
$strNoRights = 'No tens prou privilegis per visualitzar aquesta informaci&oacute;!';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoValidateSQL = 'Saltar la Validaci&oacute; de l\'SQL';
$strNone = 'Res';
$strNotNumber = 'Aquest valor no &eacute;s un n&uacute;mero!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNotValidNumber = ' no es un n&uacute;mero de columna v&agrave;lid!';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';

$strOK = 'Correcte';
$strOftenQuotation = 'Marques sint&agrave;ctiques. OPCIONALMENT vol dir que nom&eacute;s els camps de tipus char i varchar van "tancats dins" "-aquest car&agrave;cter.';
$strOperations = 'Operacions';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure car&agrave;cters especials.';
$strOptionally = 'OPCIONALMENT';
$strOptions = 'Opcions';
$strOr = 'O';
$strOverhead = 'Defragmentat';

$strPageNumber = 'N&uacute;mero de p&agrave;gina:';
$strPartialText = 'Textos Parcials';
$strPassword = 'Contrasenya';
$strPasswordEmpty = 'La contrasenya &eacute;s buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - P&agrave;gina %s';
$strPdfInvalidPageNum = 'N&uacute;mero de p&agrave;gina PDF no definida!';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPhp = 'Crear codi PHP';
$strPHP40203 = 'S\'esta fent servir la versi&oacute; 4.2.3 de PHP, que t&eacute; un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versi&oacute; de PHP per treballar amb phpMyAdmin.';
$strPHPVersion = 'PHP versi&oacute;';
$strPmaDocumentation = 'Documentaci&oacute; de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar al fitxer de configuraci&oacute;!';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Prim&agrave;ria';
$strPrimaryKey = 'Clau Prim&agrave;ria';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>nom&eacute;s</b>el nom de la clau principal!)';
$strPrint = 'Imprimir';
$strPrintView = 'Imprimir vista';
$strPrivileges = 'Privilegis';
$strProperties = 'Propietats';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';

$strReType = 'Reescriure';
$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRelationNotWorking = 'Les caracter&iacute;stiques addicionals per treballar amb taules enlla�ades s\'han desactivat. Per saber perqu&egrave; clica %saqu&iacute;%s.';
$strRelationView = 'Vista de Relacions';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strRememberReload = 'Recorda reiniciar el MySQL';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strRevoke = 'Revocar';
$strRevokeGrant = 'Revocar garantia';
$strRevokeGrantMessage = 'Has revocat la garantia de privilegis per a %s';
$strRevokeMessage = 'Has revocat els privilegis per %s';
$strRevokePriv = 'Revocar privilegis';
$strRowLength = 'Longitud de fila';
$strRowSize = 'Mida de fila ';
$strRows = 'Fila';
$strRowsFrom = 'Files comen�ant des de';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions=" en mode %s i repeteix cap�aleres despr&eacute;s de %s cel&middot;les ";
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad&iacute;stica de files';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunning = 'funcionant a %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = '&Eacute;s possible que hagueu trobat un error a l\'int&egrave;rpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada &eacute;s que estigueu pujant un arxiu amb dades bin&agrave;ries per fora de l\'&agrave;rea de text delimitada. Tamb&eacute; podeu provar la consulta a la interf&iacute;cie de comandes de MySQL. La sortida seg�ent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'int&egrave;rpret falla i l\'interf&iacute;cie de comandes funciona, redu�u la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secci&oacute; de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida seg�ent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometes sense tancar';
$strSQPBugUnknownPunctuation = 'Signe de puntuaci&oacute; desconegut';
$strSave = 'Guardar';
$strScaleFactorSmall = 'El factor de l\'escala &eacute;s massa petit per posar l\'esquema en una p&agrave;gina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comod&iacute;: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressi&oacute; regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSelect = 'Selecciona';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Selecciona els camps (un com a m&iacute;nim):';
$strSelectNumRows = 'en consulta';
$strSelectTables = 'Selecciona Taules';
$strSend = 'enviar';
$strServer = 'Servidor %s';
$strServerChoice = 'Elecci&oacute; de Servidor';
$strServerVersion = 'Versi&oacute; del servidor';
$strSetEnumVal = 'Si el tipus de camp &eacute;s "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowCols = 'Mostra columnes';
$strShowGrid = 'Mostra graella';
$strShowPHPInfo = 'Mostra informaci&oacute; de PHP';
$strShowTableDimension = 'Mostra dimensi&oacute; de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strShowingRecords = 'Mostrant registres: ';
$strSingly = '(singly)';
$strSize = 'Mida';
$strSort = 'Classificaci&oacute;';
$strSpaceUsage = 'Utilitzaci&oacute; d\'espai';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strStatement = 'Sent&egrave;ncies';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir \'drop table\'';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucOnly = 'Nom&eacute;s l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb &egrave;xit';
$strSum = 'Suma';

$strTable = 'taula ';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula &eacute;s buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat el cach&eacute; de la taula %s';
$strTableMaintenance = 'Manteniment de la taula';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTables = '%s taula(es)';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substituir&agrave; els continguts de les taules seleccionades a les files que contenen la mateixa clau &uacute;nica o prim&agrave;ria';
$strTheTerminator = 'El separador de camps.';
$strTotal = 'total';
$strType = 'Tipus';

$strUncheckAll = 'Deseleccionar tot';
$strUnique = '&Uacute;nica';
$strUnselectAll = 'Deselecciona tot';
$strUpdatePrivMessage = 'Heu actualitzat els privilegis de %s.';
$strUpdateProfile = 'Actualitza perfil:';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUsage = '&Uacute;s';
$strUseBackquotes = 'Usa "backquotes" amb taules i noms de camps';
$strUseTables = 'Usa Taules';
$strUser = 'Usuari';
$strUserEmpty = 'El nom d\'usuari &eacute;s buit!';
$strUserName = 'Nom d\'usuari';
$strUsers = 'Usuaris';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal&middot;lats els m&ograve;duls de PHP necessaris tal i com s\'indica a la %sdocumentaci&oacute;%s.';
$strValue = 'Valor';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No est&agrave; disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWithChecked = 'Amb marca:';
$strWrongUser = 'Usuari i/o clau erronis. Acc&eacute;s denegat.';

$strYes = 'Si';

$strZip = '"comprimit amb zip"';
// To translate

?>
