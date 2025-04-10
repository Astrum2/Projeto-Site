

const scriptsInEvents = {

	async ["Eventos-Fase1_Event42_Act5"](runtime, localVars)
	{
		
		const inimigo = runtime.objects.Inimigo1.getFirstPickedInstance(); 
		const ponto = inimigo.instVars.PontosInimigo1;
		runtime.globalVars.Pontos += ponto;
	}
};

self.C3.ScriptsInEvents = scriptsInEvents;
