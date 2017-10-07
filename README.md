![Imagen no disponible](https://s-media-cache-ak0.pinimg.com/236x/82/e8/7c/82e87cfd38b05580065d9737ebb74cd3.jpg)

Aplicacio Web sobre registre de llibres per ha un bibliocafe, s'anomena The bookcafe

La finalitat d'aquesta aplicacio es la de poder realitzar un correcte registre dels nous llibres que es volen introduir al nostre bibliocafe, l'aplicacio esta pensada per ha ser utilitzada per el administrador, o administradors de la web, per tat, nomes les persones autoritzades, podran realitzar la gestio dels llibres del nostre bibliocafe.

La funcionalitat de l'aplicacio web, es la següent:

El primer que veu el administrador al accedir a l'aplicacio es, una imatge de la tematica de la web, la web es sobre un bibliocafe, i el administrador te la possibilitat de afegir llibres ha la base de dades, que te el bibliocafe. en la pestanya de llibres, es mostren tots els llibres que estan registrats hen la base de dades, i les opcions que es presenten, per ha gestionar els sobres son, visualitzar en mes detall, informacio sobre els  llibres, actualitzar informacio sobre els llibres, o borrar el llibre selecionat de la base de dades.

També, com es natural, es poden afegir llibres a la base dades, per ha fer-ho, hi ha que pulsar el boto verd, que te una creu, al fer aixo, sens presenta un formulario, ahon podem complimentar totes les dades del llibre:titol, autor,genere, descripcio, fecha de puiblicacio... He de destacar, que el formulari, presenta un datepicker, per ha que sigua mes facil per al usuari ingresar la fecha de publicacio, (La fecha de publicacio, nomes es pot realitzar de llibres que es pobliquen proximament, o hui, aço esta fet per que la pagina presenta llibres de actualitat i moderns). el formulari, te inclossos uns validadors, en javascript, per ha comprovar que tots elscamps, estiguen hen el format correcte, i un altra validacio en php per ha que es valide contra el servidor. aquestes 2 valicacions, es poden distinguir, per el color de lletra del missatge de alerta que apareix al commetre el error.

Una vegada s'ha afegit el nou llibre, es poden vore els detalls del llibre, els detalls es mostren en una taula.
A l'hora de actualitzar algun detall del llibre, es presenta el mateix formulari que s'utilitza hen el create, per tant al realitzar el update, també es realitzen les validacions en php i javascript.
En el Delete, es presenta una confirmacio, per si decas t'equivoques al polsar el boto, hi borres el que no es.

Les millores que presenta, son:

Plugin anomenat Llenarylimpiarcampos, la funcio del cual es omplir els camps del formulari amb un text, i al pulsar dins del camp que desaparega el missatge hi donar l'oportunitat al administrador de complimentar el formulari.

Posibilitat de borrar tots els usuaris de la base de dades.

M'havera agradat fer mes millores, pero per falta de temps, no han sigut possibles.