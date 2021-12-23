package jeu ;
import java.util.* ;


/**
 * This class represent a match and how determine the winner of an opposition
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 3.0
 */
public class Match {

	private List<MatchListener> matchlistener ;

	/**
	 * The constructor
	 */
	public Match(List<MatchListener> matchlistener){
		this.matchlistener = matchlistener ;
	}

	/**
	 * @param c1
	 * @param c2
	 * @return the winner of the match (Competitor)
	 */
	public Competitor playMatch(Competitor c1, Competitor c2){
		Random rand = new Random() ;

		int alea = rand.nextInt(2) ;
		System.out.print(c1.getName() + " vs " + c2.getName() + " --> ");
		MatchEvent me;
		if(alea == 0){
			 me = new MatchEvent(c1,c2);
			 this.resultMatch(c1);
		}
		else{
			 me = new MatchEvent(c2,c1);
			 this.resultMatch(c2);
		}


		Iterator<MatchListener> i = this.matchlistener.iterator();
	    while (i.hasNext()) {
	      i.next().MatchEnded(me);
	    }

	    return me.getWinner();

	}


	/**
	 * apply the consequences of winning a match. add points and display the winner
	 * @param c
	 * @return the competitor who won. (Competitor)
	 */
	private Competitor resultMatch(Competitor c) {
		System.out.println(c.getName()+" Wins !");
		return c ;
	}

	/**
	 * return all the listener of the match
	 * @return the list of matchListener. (List<MatchListener>)
	 */
	public List<MatchListener> getMatchListener(){
		return this.matchlistener ;
	}

	/**
	 * add a listener to the list
	 * @param ml
	 */
	public void addListener(MatchListener ml){
		this.matchlistener.add(ml) ;
	}




}
