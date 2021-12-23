package jeu ;
import util.*;

import java.util.ArrayList;
import java.util.List;


/**
	*@author Havart Florentin - Bugnon Florentin
	*@version 3.0
 */
public class MainMaster{
	public static void main(String[] args) throws listSizeException{
		/*
		 * create competitor
		 * create List and ad all competitor
		 * create GroupeStageStrategy
		 * create GroupeStage
		 * create master and play competition
		 * */
		Competitor c1 = new Competitor("Flo") ;
		Competitor c2 = new Competitor("Leo") ;
		Competitor c3 = new Competitor("Max") ;
		Competitor c4 = new Competitor("Ori") ;
		List<Competitor> lc =  new ArrayList<Competitor>() ;
		lc.add(c1) ;
		lc.add(c2) ;
		lc.add(c3) ;
		lc.add(c4) ;
		GroupeStageStrategy gsstrategy = new GSStrategy1() ;
		GroupStage gs = new GroupStage(lc, gsstrategy) ;
		Master master = new Master(lc, gs);

		Bookmaker bookmaker = new Bookmaker(lc);
		Journalist journaliste = new Journalist("flo");
		master.addListener(journaliste);
		master.addListener(bookmaker);
		master.play();

		master.displayRanking() ;



	}
}
