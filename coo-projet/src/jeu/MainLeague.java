package jeu ;
import util.*;

import java.util.ArrayList;
import java.util.List;


/**
	*@author Havart Florentin - Bugnon Florentin
	*@version 3.0
 */
public class MainLeague{
	public static void main(String[] args) throws listSizeException{
		System.out.println("--- Ligue ---") ;
		Competitor c1 = new Competitor("Flo") ;
		Competitor c2 = new Competitor("Leo") ;
		Competitor c3 = new Competitor("Max") ;
		Competitor c4 = new Competitor("Ori") ;
		List<Competitor> lc =  new ArrayList<Competitor>() ;
		lc.add(c1) ;
		lc.add(c2) ;
		lc.add(c3) ;
		lc.add(c4);
		League league = new League(lc) ;
		Bookmaker bookmaker = new Bookmaker(lc);
		Journalist journaliste = new Journalist("flo");
		league.addListener(journaliste);
		league.addListener(bookmaker);
		league.play() ;
		league.displayRanking() ;


	}
}
