Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. <br>

<?php  

$paragraph = "Per una di queste stradicciole, tornava bel bello dalla passeggiata verso casa,
sulla sera del giorno 7 novembre dell’anno 1628, don Abbondio, curato d’una
delle terre accennate di sopra: il nome di questa, nè il casato del personaggio, non
si trovan nel manoscritto, nè a questo luogo nè altrove. Diceva tranquillamente il
suo ufizio, e talvolta, tra un salmo e l’altro, chiudeva il breviario, tenendovi
dentro, per segno, l’indice della mano destra, e, messa poi questa nell’altra dietro
la schiena, proseguiva il suo cammino, guardando a terra, e buttando con un piede
verso il muro i ciottoli che facevano inciampo nel sentiero: poi alzava il viso, e,
girati oziosamente gli occhi all’intorno, li fissava alla parte d’un monte, dove la
luce del sole già scomparso, scappando per i fessi del monte opposto, si dipingeva
qua e là sui massi sporgenti, come a larghe e inuguali pezze di porpora. Aperto
poi di nuovo il breviario, e recitato un altro squarcio, giunse a una voltata della
stradetta, dov’era solito d’alzar sempre gli occhi dal libro, e di guardarsi dinanzi:
e così fece anche quel giorno. Dopo la voltata, la strada correva diritta, forse un
sessanta passi, e poi si divideva in due viottole, a foggia d’un ipsilon: quella a
destra saliva verso il monte, e menava alla cura: l’altra scendeva nella valle fino a
un torrente; e da questa parte il muro non arrivava che all’anche del passeggiero. I
muri interni delle due viottole, in vece di riunirsi ad angolo, terminavano in un
tabernacolo, sul quale eran dipinte certe figure lunghe, serpeggianti, che finivano
in punta, e che, nell’intenzion dell’artista, e agli occhi degli abitanti del vicinato,
volevan dir fiamme; e, alternate con le fiamme, cert’altre figure da non potersi
descrivere, che volevan dire anime del purgatorio: anime e fiamme a color di
5mattone, sur un fondo bigiognolo, con qualche scalcinatura qua e là. Il curato,
voltata la stradetta, e dirizzando, com’era solito, lo sguardo al tabernacolo, vide
una cosa che non s’aspettava, e che non avrebbe voluto vedere. Due uomini
stavano, l’uno dirimpetto all’altro, al confluente, per dir così, delle due viottole:
un di costoro, a cavalcioni sul muricciolo basso, con una gamba spenzolata al di
fuori, e l’altro piede posato sul terreno della strada; il compagno, in piedi,
appoggiato al muro, con le braccia incrociate sul petto. L’abito, il portamento, e
quello che, dal luogo ov’era giunto il curato, si poteva distinguer dell’aspetto, non
lasciavan dubbio intorno alla lor condizione. Avevano entrambi intorno al capo
una reticella verde, che cadeva sull’omero sinistro, terminata in una gran nappa, e
dalla quale usciva sulla fronte un enorme ciuffo: due lunghi mustacchi arricciati in
punta: una cintura lucida di cuoio, e a quella attaccate due pistole: un piccol corno
ripieno di polvere, cascante sul petto, come una collana: un manico di coltellaccio
che spuntava fuori d’un taschino degli ampi e gonfi calzoni, uno spadone, con una
gran guardia traforata a lamine d’ottone, congegnate come in cifra, forbite e
lucenti: a prima vista si davano a conoscere per individui della specie de’ bravi."; 



$paragraphs = preg_split('/\.\s+/', $paragraph);

foreach ($paragraphs as $paragraph) {
    echo "<p>$paragraph .</p>";
}
?>