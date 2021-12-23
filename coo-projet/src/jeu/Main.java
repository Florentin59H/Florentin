package jeu ;
import util.*;

import java.util.ArrayList;
import java.util.List;


/**
	*@author Havart Florentin - Bugnon Florentin
	*@version 3.0
 */
public class Main{
	public static void main(String[] args) throws listSizeException{





		System.out.println("--- Ligue ---") ;
		Competitor c1 = new Competitor("Flo") ;	Competitor c2 = new Competitor("Leo") ; Competitor c3 = new Competitor("Max") ; Competitor c4 = new Competitor("Ori") ;
		List<Competitor> lc =  new ArrayList<Competitor>() ;
		lc.add(c1) ; lc.add(c2) ; lc.add(c3) ; lc.add(c4);
		//creation MatchListener
		Journalist journaliste = new Journalist("flo");
		Bookmaker bookmaker = new Bookmaker(lc);
		League league = new League(lc) ;
		league.addListener(journaliste);
		league.addListener(bookmaker);
		league.play() ;
		league.displayRanking() ;

		System.out.println("*************************************************") ;

		System.out.println("--- Tournoi ---") ;
		Competitor c5 = new Competitor("Flo") ; Competitor c6 = new Competitor("Leo") ; Competitor c7 = new Competitor("Max") ; Competitor c8 = new Competitor("Ori") ;
		List<Competitor> lc2 =  new ArrayList<Competitor>() ;
		lc2.add(c5) ; lc2.add(c6) ; lc2.add(c7) ; lc2.add(c8);
		Tournament tournament = new Tournament(lc2) ;
		Bookmaker bookmaker2 = new Bookmaker(lc2);
		Journalist journaliste2 = new Journalist("flo2");
		tournament.addListener(journaliste2);
		tournament.addListener(bookmaker2);
		tournament.play() ;
		tournament.displayRanking() ;
	}
}
