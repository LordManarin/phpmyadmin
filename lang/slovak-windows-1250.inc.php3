<?php

/* $Id$ */
/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'windows-1250';
$text_dir = 'ltr';
$left_font_family = '"verdana ce", "arial ce", verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = '"verdana ce", "arial ce", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';


$strAccessDenied = 'Pr�stup zamietnut�';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddNewField = 'Prida� nov� pole';
$strAddPrivMessage = 'Privil�gium bolo pridan�.';
$strAddPriv = 'Prida� nov� privil�gium';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dotazu po "where" pr�kaze):';
$strAddToIndex = 'Prida� do indexu &nbsp;%s&nbsp;st�pec';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfterInsertBack = 'Sp�';
$strAfterInsertNewInsert = 'Vlo�i� nov� z�znam';
$strAfter = 'Po %s';
$strAllTableSameWidth = 'zobrazi� v�etky tabu�ky s rovnakou ��rkou?';
$strAll = 'V�etko';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAnIndex = 'Bol pridan� index pre %s';
$strAny = 'Ak�ko�vek';
$strAnyColumn = 'Ak�ko�vek st�pec';
$strAnyDatabase = 'Ak�ko�vek datab�za';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyTable = 'Ak�ko�vek tabu�ka';
$strAnyUser = 'Akyko�vek pou��vate�';
$strAPrimaryKey = 'Bol pridan� prim�rny k��� pre %s';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';

$strBack = 'Sp�';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBookmarkDeleted = 'Z�znam z ob��ben�ch bol zmazan�.';
$strBookmarkLabel = 'N�zov';
$strBookmarkQuery = 'Ob��ben� SQL dotaz';
$strBookmarkThis = 'Prida� tento SQL dotaz do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowse = 'Prech�dza�';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'nieje mo�n� nahra� roz��renie pre MySQL,<br />pros�m skontrolujte konfigur�ciu PHP.';
$strCantLoadRecodeIconv = 'Nieje mo�n� nahra� roz��renie iconv alebo recode potrebn� pre prevod znakov�ch sad. Upravte nastavenie php tak aby umo��ovalo pou�i� tieto roz��renia alebo vypnite t�to vlastnos� v konfigur�cii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nieje mo�n� premenova� index na PRIMARY!';
$strCantUseRecodeIconv = 'Nieje mo�n� pou�i� funkcie iconv,libiconv a recode_string aj napriek tomu, �e roz��renia su nahran�. Zkontrolujte pros�m nastavenie PHP.';
$strCardinality = 'Mohutnos�';
$strCarriage = 'N�vrat voz�ku (Carriage return): \\r';
$strChangeDisplay = 'Zvolte, ktor� pole zobrazi�';
$strChangePassword = 'Zmeni� heslo';
$strChange = 'Zmeni�';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckDbPriv = 'Skontrolova� privil�gia datab�zy';
$strCheckTable = 'Skontrolova� tabu�ku';
$strChoosePage = 'Pros�m zvolte si Str�nku, ktor� chcete upravi�';
$strColComFeat = 'Zobrazova� koment�re st�pcov';
$strColumnNames = 'N�zvy st�pcov';
$strColumn = 'St�pec';
$strComments = 'Koment�re';
$strCompleteInserts = '�pln� vlo�enie';
$strConfigureTableCoord = 'Pros�m skonfigurujte koordin�ty pre tabu�ku %s';
$strConfirm = 'Skuto�ne si �el�te toto vykona�?';
$strCookiesRequired = 'Cookies musia by� zapnut� pokia� chcete pokra�ova�.';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCopyTable = 'Skop�rova� tabu�ku do';
$strCopyTable = 'Skop�rova� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strCreateIndexTopic = 'Vytvori� nov� index';
$strCreateIndex = 'Vytvori� index na&nbsp;%s&nbsp;st�pcoch';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze %s';
$strCreatePage = 'Vytvori� nov� Str�nku';
$strCreatePdfFeat = 'Vytv�ranie PDF';
$strCreate = 'Vytvori�';
$strCriteria = 'Krit�ria';

$strDatabase = 'Datab�za ';
$strDatabaseHasBeenDropped = 'Datab�za %s bola zmazan�.';
$strDatabases = 'datab�z(y)';
$strDatabasesStats = '�tatistiky datab�zy';
$strDatabaseWildcard = 'Databåza (povolenÊ nahradzujúce znaky):';
$strData = 'D�ta';
$strDataOnly = 'Iba d�ta';
$strDefault = 'Predvolen�';
$strDeleted = 'Riadok bol zmazan�';
$strDeletedRows = 'Zmazan� riadky:';
$strDeleteFailed = 'Mazanie bolo ne�spe�n�!';
$strDeleteUserMessage = 'Pou��vate� %s bol zmazan�.';
$strDelete = 'Zmaza�';
$strDescending = 'Zostupne';
$strDisabled = 'Vypnut�';
$strDisplayFeat = 'Zobrazi� vlastnosti';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDisplayPDF = 'Zobrazi� sch�mu PDF';
$strDisplay = 'Zobrazi�';
$strDoAQuery = 'Vykonaż "dotaz podĞa príkladu" (nahradzujúci znak: "%")';
$strDocu = 'Dokument�cia';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDropDB = 'Odstr�ni� datab�zu %s';
$strDrop = 'Odstr�ni�';
$strDropTable = 'Zru�i� tabu�ku';
$strDumpingData = 'Dampujem d�ta pre tabu�ku';
$strDumpXRows = 'Zobrazi� %s riadkov od riadku %s.';
$strDynamic = 'dynamic';

$strEditPDFPages = 'Upravi� PDF Str�nky';
$strEditPrivileges = 'Upravi� privil�gia';
$strEdit = 'Upravi�';
$strEffective = 'Efekt�vny';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEmpty = 'Vypr�zdni�';
$strEnabled = 'Zapnut�';
$strEnd = 'Koniec';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL privil�gi� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strExplain = 'Vysvetli� SQL';
$strExport = 'Exportova�';
$strExportToXML = 'Exportova� do form�tu XML';
$strExtendedInserts = 'Roz��ren� vkladanie';
$strExtra = 'Extra';

$strFieldHasBeenDropped = 'Pole %s bolo odstr�nen�';
$strField = 'Pole';
$strFieldsEmpty = ' Po�et pol� je pr�zdny! ';
$strFieldsEnclosedBy = 'Polia uzatvoren�';
$strFieldsEscapedBy = 'Polia uveden� pomocou';
$strFields = 'Polia';
$strFieldsTerminatedBy = 'Polia ukon�en�';
$strFixed = 'pevn�';
$strFlushTable = 'Vypr�zdni� tabu�ku ("FLUSH")';
$strFormat = 'Form�t';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFullText = 'Pln� texty';
$strFunction = 'Funkcia';

$strGenBy = 'Vygenerovan�';
$strGeneralRelationFeat = 'Mo�nosti v�eobecn�ch vztahov';
$strGenTime = 'Vygenerovan�:';
$strGo = 'Vykonaj';
$strGrants = 'Privil�gia';
$strGzip = '"gzip-ovan�"';

$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHaveToShow = 'Zvolte pros�m aspo� jeden st�pec, ktor� checete zobrazi�';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin-a';
$strHomepageSourceforge = 'Download str�nka phpMyAdmin-a (Sourceforge)';
$strHostEmpty = 'N�zov hostitela je pr�zdny!';
$strHost = 'Hostitel';

$strIdxFulltext = 'Cel� text';
$strIfYouWish = 'Ak si zel�te nahra� iba ur�it� st�pce tabu�ky, �pecifikujte ich ako zoznam pol� oddelen� �iarkou.';
$strIgnore = 'Ignorova�';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index pre %s bol odstr�nen�';
$strIndex = 'Index';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertedRows = 'Vlo�en� riadky:';
$strInsertNewRow = 'Vlo�i� nov� riadok';
$strInsertTextfiles = 'Vlo�i� textov� s�bory do tabu�ky';
$strInsert = 'Vlo�i�';
$strInstructions = 'In�trukcie';
$strInUse = 'pr�ve sa pou��va';
$strInvalidName = '"%s" je rezervovan� slovo, nem��e by� pou�it� ako n�zov datab�zy/tabu�ky/po�a.';

$strKeepPass = 'Nezmeni� heslo';
$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';

$strLength = 'D�ka';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLineFeed = 'Ukon�enie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLinesTerminatedBy = 'Riadky ukon�en�';
$strLinkNotFound = 'Linka nebola n�jden�';
$strLinksTo = 'Linkova� na';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLogin = 'Login';
$strLogout = 'Odhl�si� sa';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Pou��vate�:';

$strMissingBracket = 'Ch�ba z�tvorka';
$strModifications = 'Zmeny boli ulo�en�';
$strModifyIndexTopic = 'Modifikova� index';
$strModify = 'Zmeni�';
$strMoveTableOK = 'Tabu�ka %s bola presunut� do %s.';
$strMoveTable = 'Presun�� tabu�ku do (datab�za<b>.</b>tabu�ka):';
$strMySQLCharset = 'Znakov� sada v MySQL';
$strMySQLReloaded = 'MySQL znovu-na��tan�.';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLServerProcess = 'MySQL %pma_s1% be�i na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNext = '�al��';
$strNoDatabases = '�iadne datab�zy';
$strNoDescription = 'bez Popisu';
$strNoDropDatabases = 'Mo�nos� "DROP DATABASE" vypnut�.';
$strNoExplain = 'Preskoci� vysvetlenie SQL';
$strNoFrames = 'phpMyAdmin funguje lep�ie s prehliada�mi podporuj�cimi <b>r�my</b>.';
$strNoIndex = 'Nebol definovan� �iadny index!';
$strNoIndexPartsDefined = '�asti indexu neboli definovan�!';
$strNoModification = '�iadna zmena';
$strNone = '�iadny';
$strNo = 'Nie';
$strNoPassword = '�iadne heslo';
$strNoPhp = 'bez PHP k�du';
$strNoPrivileges = '�iadne privil�gia';
$strNoQuery = '�iadny SQL dotaz!';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNotNumber = 'Toto nieje ��slo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabu�ka <b>%s</b> nebola n�jden� alebo nieje nastaven� v %s';
$strNotValidNumber = ' nieje platn� ��slo riadku!';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNoValidateSQL = 'Presko�i� potvrdenie platnosti SQL';
$strNull = 'Nulov�';
$strNumSearchResultsInTable = '%s v�skyt(ov)v tabu�ke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> v�skyt(ov)';

$strOftenQuotation = '�asto uvodzuj�ce znaky. Volite�ne znamena, �e iba polia typu char a varchar s� uzatvoren� do "uzatv�rac�ch" znakov.';
$strOK = 'OK';
$strOperations = 'Oper�cie';
$strOptimizeTable = 'Optimalozova� tabu�ku';
$strOptionalControls = 'Voliteln�. Ur�uje ako zapisova� alebo ��ta� �peci�lne znaky.';
$strOptionally = 'Volite�ne';
$strOptions = 'Vo�by';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPageNumber = '��slo str�nky:';
$strPartialText = '�iasto�n� texty';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPassword = 'Heslo';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPdfDbSchema = 'Sch�ma datab�zy "%s"  - Strana %s';
$strPdfInvalidPageNum = 'Nedefinovan� ��slo str�nky v PDF!';
$strPdfInvalidTblName = 'Tabu�ka "%s" neexistuje!';
$strPdfNoTables = '�iadne tabu�ky';
$strPHPVersion = 'Verzia PHP';
$strPhp = 'Vytvori� PHP k�d';
$strPmaDocumentation = 'phpMyAdmin Dokument�cia';
$strPmaUriError = 'Direkt�va <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfigura�nom s�bore MUS� by� nastaven�!';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimaryKeyHasBeenDropped = 'Prim�rny k��� bol zru�en�';
$strPrimaryKeyName = 'N�zov prim�rneho k��ca mus� by�... PRIMARY!';
$strPrimaryKey = 'Prim�rny k���';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> by� <b>iba</b> meno prim�rneho k���a!)';
$strPrimary = 'Prim�rny';
$strPrintView = 'N�h�ad k tla�i';
$strPrivileges = 'Privil�gia';
$strProperties = 'Vlastnosti';

$strQBEDel = 'Zmaza�';
$strQBE = 'Dotaz pod�a pr�kladu';
$strQBEIns = 'Vlo�i�';
$strQueryOnDb = ' SQL dotaz v datab�ze <b>%s</b>:';

$strRecords = 'Z�znamov';
$strReferentialIntegrity = 'Skontrolova� referen�n� integritu:';
$strRelationNotWorking = 'Pr�davn� vlastnosti pre pr�cu s prepojen�mi tabu�kami boli deaktivovan�. Ak chcete zisti� pre�o, kliknite %ssem%s.';
$strRelationView = 'Zobrazi� spojitosti';
$strReloadFailed = 'Znovu-na��tanie MySQL bolo ne�spe�n�.';
$strReloadMySQL = 'Znovu-na��ta� MySQL';
$strRememberReload = 'Nezabudnite znovu-na��ta� MySQL server.';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRenameTable = 'Premenova� tabu�ku na';
$strRepairTable = 'Opravi� tabu�ku';
$strReplace = 'Nahradi�';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReset = 'P�vodn� (Reset)';
$strReType = 'Potvrdi�';
$strRevokeGrantMessage = 'Bolo zru�en� pr�vo pridelova� privil�gia pre %s';
$strRevokeGrant = 'Zru�i� polovenie pridelova� privil�gia';
$strRevokeMessage = 'Boli zru�en� privil�gia pre %s';
$strRevokePriv = 'Zru�i� privil�gia';
$strRevoke = 'Zrusi�';
$strRowLength = 'D�ka riadku';
$strRowsFrom = 'riadky za��naj� od';
$strRowSize = ' Ve�kos� riadku ';
$strRowsModeHorizontal = 'horizont�lnom';
$strRowsModeOptions = 'v(o) %s m�de a opakova� hlavi�ky po ka�d�ch %s bunk�ch';
$strRowsModeVertical='vertik�lnom';
$strRows = 'Riadkov';
$strRowsStatistic = '�tatistika riadku';
$strRunning = 'be�i na %s';
$strRunQuery = 'Odo�li dotaz';
$strRunSQLQuery = 'Spusti� SQL dotaz/dotazy na datab�zu %s';

$strSave = 'Ulo�i�';
$strScaleFactorSmall = 'Mierka je pr�li� mala na roztiahnutie sch�my na str�nku';
$strSearchFormTitle = 'H�ada� v datab�ze';
$strSearch = 'H�ada�';
$strSearchInTables = 'V tabu�ke(�ch):';
$strSearchNeedle = 'Slovo(�) alebo hodnotu(y), ktor� chcete vyh�ada� (nahradzuj�ci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'v�etky slov�';
$strSearchOption3 = 'presn� v�raz';
$strSearchOption4 = 'ako relul�rny v�raz';
$strSearchResultsFor = 'Preh�ada� v�sledky na "<i>%s</i>" %s:';
$strSearchType = 'N�jdi:';
$strSelectADb = 'Pros�m vyberte si datab�zu';
$strSelectAll = 'Ozna�i� v�etko';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSelectTables = 'Vybra� Tabu�ky';
$strSelect = 'Vybra�';
$strSend = 'Po�li';
$strServerChoice = 'Vo�ba serveru';
$strServerVersion = 'Verzia serveru';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", pros�m zad�vajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca porebujete zada� sp�tn� lom�tko ("\") alebo apostrof ("\'") pri t�chto hodnot�ch, zadajte ich napr�klad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShowAll = 'Zobrazi� v�etko';
$strShowColor = 'Zobrazi� farbu';
$strShowCols = 'Zobrazi� st�pce';
$strShowGrid = 'Zobrazi� mrie�ku';
$strShowingRecords = 'Uk�za� z�znamy ';
$strShowPHPInfo = 'Zobrazi� inform�cie o PHP';
$strShowTableDimension = 'Zobrazi� rozmery tabuliek';
$strShowTables = 'Zobrazi� tabu�ky';
$strShowThisQuery = ' Zobrazi� tento dotaz znovu ';
$strShow = 'Uk�za�';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSort = 'Triedi�';
$strSpaceUsage = 'Zabran� miesto';
$strSplitWordsWithSpace = 'Slov� s� rozdelen� medzerou (" ").';
$strSQLQuery = 'SQL dotaz';
$strSQLResult = 'v�sledok SQL';
$strSQL = 'SQL';
$strStatement = '�daj';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucDrop = 'Pridaj \'vyma� tabu�ku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel d�ta';
$strStrucOnly = 'Iba �trukt�ru';
$strStructPropose = 'Navrhn�� �trukt�ru tabu�ky';
$strStructure = '�trukt�ra';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dotaz bol �spe�ne vykonan�';
$strSum = 'Celkom';

$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableHasBeenDropped = 'Tabu�ka %s bola odstr�nen�';
$strTableHasBeenEmptied = 'Tabu�ka %s bola vypr�zden�';
$strTableHasBeenFlushed = 'Tabu�ka %s bola vypr�zdnen�';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTables = '%s tabu�ka(y)';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTable = 'tabu�ka ';
$strTableType = 'Typ tabu�ky';
$strTextAreaLength = ' Toto mo�no nepojde upravi�,<br /> k�li svojej d�ke ';
$strTheContent = 'Obsah V�ho s�boru bol vlo�en�.';
$strTheContents = 'Obsah s�boru prep�e obsah vybranej tabu�ky v riadkoch s identick�m prim�rnym alebo unik�tnym k���om.';
$strTheTerminator = 'Ukon�enie pol�.';
$strTotal = 'celkovo';
$strType = 'Typ';

$strUncheckAll = 'Odzna�i� v�etko';
$strUnique = 'Unik�tny';
$strUnselectAll = 'Odzna�i� v�etko';
$strUpdatePrivMessage = 'Boli aktualizovan� privil�gia pre %s.';
$strUpdateProfile = 'Aktualizova� profil:';
$strUpdateProfileMessage = 'Profil bol aktualizovan�.';
$strUpdateQuery = 'Aktualizova� dotaz';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUser = 'Pou��vate�';
$strUsers = 'Pou��vatelia';
$strUseTables = 'Pou�i� tabu�ky';

$strValidateSQL = 'Potvrdi� platnos� SQL';
$strValue = 'Hodnota';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';

$strWelcome = 'Vitajte v %s';
$strWithChecked = 'V�ber:';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strYes = '�no';

$strZip = '"zo zipovan�"';
// To translate


$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

?>
