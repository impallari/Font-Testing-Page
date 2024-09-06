<div class="dontprint">
	<p class="sizelabel">
	 <input type="range" min="12" max="120" value="40" step="1" oninput="changeFontSizeGBES(this.value)" onchange="changeFontSizeGBES(this.value)" style="width: 400px;" />
	 <input type="range" min="0.6" max="2" value="1.5" step="0.01" oninput="changeLineHeigthGBES(this.value)" onchange="changeLineHeigthGBES(this.value)" style="width: 200px;" />
	 <a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="makeLowercaseGBES(); return false;">Lowercase</a>&nbsp; 
	 <a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="makeCapitalizedGBES(); return false;">Initial</a>&nbsp; 
	 <a nohref style="cursor:pointer;color:blue;text-decoration:none" onclick="makeUppercaseGBES(); return false;">AllCaps</a> 
	</p>

	<script type="text/javascript">
		// Fuctions to change size and line heigth
		function changeFontSizeGBES(newValue) {
		document.getElementById("changedfontsizeGBES").innerHTML=newValue;
			$('.changesizeGBES').css('font-size',newValue + 'px');
		};
		function changeLineHeigthGBES(newValue) {
		document.getElementById("changedlineheigthGBES").innerHTML=newValue;
			$('.changesizeGBES').css('line-height', newValue);
		};
		// Fuctions to change capitalization of words
		function makeLowercaseGBES() {
			$('.changesizeGBES').removeClass('uppercase capitalized'); 
			$('.changesizeGBES').addClass('lowercase');
		};	
		function makeCapitalizedGBES() {
			$('.changesizeGBES').removeClass('uppercase lowercase');
			$('.changesizeGBES').addClass('capitalized');
		};	
		function makeUppercaseGBES() {
			$('.changesizeGBES').removeClass('lowercase capitalized');
			$('.changesizeGBES').addClass('uppercase');
		};						
	</script>
</div>

<div style="width: 1020px;" contenteditable="true">

	<p class="sizelabel">Set at <span id="changedfontsizeGBES">40</span>px / <span id="changedlineheigthGBES">5</span>em.
	<br />Top 1000 most common words in Spanish in the Google Book Corpus (source: github.com/SamuelPoquette).</p>
	<p class="sizelabel">&nbsp;</p>
	<p class="sizelabel">&nbsp;</p>
	
	<p class="sizelabel">Top 100 Spanish Words in the Google Books Corpus</p>
	<p class="changesizeGBES" style="font-size: 40px; line-height: 1.5em;">de que no a la el y es en lo un por qué me una te se los con para mi está si sí pero las bien yo su eso aquí del al como le tu más todo ya muy esto vamos ha ahora esta hay estoy algo tú tengo así nada nos cuando cómo él sé estás sólo o quiero este tiene gracias he puedo bueno soy era ser vez hacer todos ella son fue eres usted tienes puede señor ese voy quién casa creo porque tan favor hola dónde nunca sus sabes dos verdad quieres mucho entonces estaba</p>
	<p class="sizelabel">&nbsp;</p>
	
	<p class="sizelabel">From 101 to 1.000</p>
	<p class="changesizeGBES" style="font-size: 40px; line-height: 1.5em;">tiempo mí esa mejor hombre hace va dios también has vida sin están ver sr siempre oh hasta ti ahí siento puedes decir ni sobre años tenemos uno día noche cosas alguien antes mis ir poco otra quiere solo nadie nosotros padre gente parece dinero estar hecho les mismo sea estamos mira pasa trabajo dijo ellos vas claro mañana han otro después desde mundo hablar tal había sabe acuerdo momento donde fuera hijo podría seguro mujer amigo días madre allí cosa tus lugar dice gusta será gran mierda tenía mamá papá espera hoy tener ven buena estado nuevo luego podemos tres dije nuestro sido menos debe tipo buen conmigo mal todas nombre haciendo crees toda amor mío visto estas quería eh tarde importa parte aún nuestra tienen tanto cada hora veces necesito contigo ve haber buenas dicho quien hacerlo demasiado oye ah haces hombres saber entre adiós problema unos vaya hemos cierto debo razón alguna esos pues veo idea chica realmente policía hizo estos amigos ustedes quizá serio cabeza hermano digo van pasado salir cuenta familia cariño vale algún muchas señora somos pueden noches muerto ud todavía rápido viejo lado debería ves sabía suerte cuidado buenos sería da mientras miedo primera contra puerta pronto e casi nueva espero cualquier esas agua os chico cuánto niños venga camino primero hacia pensé dentro pasó debes ciudad historia año viene deja durante forma volver feliz ojos guerra caso chicos esposa adelante cuál mano hice vi gustaría muerte allá mas loco supuesto toma minutos haré entiendo pasar iba corazón semana jefe venir manos ayuda problemas juntos supongo déjame importante vete niño arriba hija otros sra personas tierra manera hablando fin mujeres cara grande ningún nuestros cinco llama hey habla bajo dices poder cuándo quizás escucha persona horas tío aunque io único dijiste siquiera quieren ninguna cerca pequeño debemos cree dame sigue auto cuatro dejar muchos igual hago listo significa capitán clase llegar doctor suficiente tomar vivir joven trabajar haya abajo hubiera primer genial justo pensar misma puta comer necesita conozco fui algunos entrar fuerte número srta morir basta dar bastante amo atrás dicen difícil éste pueda punto vino hermana hijos unas final escuela podía pueblo haga sangre meses coche juego encontrar realidad cuerpo mayor última eran queda ok paz dime vuelta hiciste tenido sola hacen ido querida iré culpa malo chicas comida dólares dr saben fácil alto posible maldito dormir deberías maldita pregunta incluso fiesta tampoco cama lejos medio preocupes ay teléfono diga ei trata equipo palabra cuanto idiota esté luz tuve país segundo querido diablos hagas señorita oportunidad matar algunas esperando necesitamos adónde verte estará venido estabas fueron seis tenga cuarto cielo vivo recuerdo perdón falta pequeña oído creer john pienso ésta esperar necesitas aqui película además marido perro general calle exactamente rey padres lista habrá habitación carajo pensando par fuego niña seguir música di habría mucha paso sentido diré podrías afuera digas ia mía murió dio café entiendes nuestras piensa ello lleva estuvo último diciendo grandes sitio libro buscando bebé cállate vuelve jamás minuto arma viaje única muchachos perdido jugar diez vemos dado sabemos mil demás gusto peor irme jack estaban orden pasando cambio extraño pobre ropa queremos oficina sino modo ocurre muchacho otras hará libre conoces piensas presidente especial anoche millones acerca derecho negro acá caballeros semanas palabras buscar segura correcto frente hacemos seas detrás puesto asunto duro sucede llamar disculpe boca atención mire armas encima demonios mala llevar cual odio hospital deben sueño quieras resto llamo perder llamado perfecto estaré tranquilo york seguridad ayudar tuvo largo pena probablemente ayer dile prueba siendo bonito recuerdas haz real veras increíble quisiera tonto simplemente vámonos haría preguntas aire conoce fuerza carta trato plan ése verlo hambre vuelto empezar campo acaba hablas vive barco hotel poner grupo creí sol tuyo pase joe voz baño usar conseguir placer llegado decirte profesor noticias lamento decirle blanco quédate estuve pie anda espere edad secreto podríamos compañía tren recuerda tras siéntate prisa vista hermosa negocio deberíamos gustan pagar george futuro silencio siente médico maestro quiera llegó loca cambiar frank sal control raro viste novia diferente imposible i amiga enseguida llamada dan dejó mes llevo avión pelo the error haremos tendrá propia siguiente ganar ley dolor oro ten acabó maldición oficial situación daño sientes entendido deseo mente ejército comprar muertos pensaba darle estúpido decía acabo david suena mitad caballo asesino vio permiso ellas trabajando maravilloso mesa divertido mejores próxima entra tom mar siete hacía sexo encanta amable mensaje información traje alma encontrado coronel dale san cena encontré charlie tendrás eras propio culo asi adentro canción gobierno sam temo abre dijeron fuiste media das estábamos estaría daré vosotros frío foto accidente derecha funciona vayas centro necesario miren bonita ante terrible pude teniente luna izquierda uds doy servicio llamas normal junto tienda navidad dirección abuela alrededor vine tendré libertad sale línea abogado pies honor tratando regresar hablo vieja papel terminado dejado juro hermoso dulce sentir principio interesante caja cualquiera ocho horrible respuesta perra gracioso s trae personal mató completamente paul vienen sean llega abuelo tengas linda tendremos michael partes cárcel hubo sistema lindo director hazlo hicieron tía busca don baja pudo salud listos cita tenías negocios tipos cámara agente verás infierno regalo río través carne totalmente decirme piso esposo oír harry sargento deje tuya ambos beber calma vestido salvo ésa verdadero basura suelo carrera cumpleaños rato iremos universidad bailar triste iglesia m delante nena banco cuántos encuentra supone existe programa alegro</p>

</div>	