package jeu ;
import util.*;

import java.util.ArrayList;
import java.util.List;


/**
	*@author Havart Florentin - Bugnon Florentin
	*@version 3.0
 */
public class MainTournament{
	public static void main(String[] args) throws listSizeException{

		System.out.println("--- Tournoi ---") ;
		Competitor c5 = new Competitor("Flo") ;
		Competitor c6 = new Competitor("Leo") ;
		Competitor c7 = new Competitor("Max") ;
		Competitor c8 = new Competitor("Ori") ;
		List<Competitor> lc2 =  new ArrayList<Competitor>() ;
		lc2.add(c5) ;
		lc2.add(c6) ;
		lc2.add(c7) ;
		lc2.add(c8);
		Tournament tournament = new Tournament(lc2) ;
		Bookmaker bookmaker = new Bookmaker(lc2);
		Journalist journaliste = new Journalist("flo");
		tournament.addListener(journaliste);
		tournament.addListener(bookmaker);
		tournament.play() ;
		tournament.displayRanking() ;
	}
}
