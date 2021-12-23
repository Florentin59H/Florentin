package jeu ;

import java.util.* ;
import java.util.Map.Entry;

import util.MapUtil ;
import util.listSizeException;

/**
 * This abstract class could represent a competition.
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 3.0
 */
public abstract class Competition implements MatchListener{

	/**
	 * This Map represent all the competitors and their points scored.
	 */
	protected Map<Competitor, Integer> points ;
	/**
	 * This list represents all the competitors who participate at the competition.
	 *
	 */
	protected List<Competitor> competitors;
	/**
	 * This list represents all the object who are listening to the competition.
	 */
	protected List<MatchListener> matchlistener ;

	/**
	 * It represents the type of match the competitors are going to play through the competition.
	 */
	protected Match match ;

	/**
	 * This is the constructor for the class Competition.
	 * @param lc
	 */
	public Competition(List<Competitor> lc){
		this.competitors=lc;
		this.match = null ;
		this.matchlistener=new ArrayList<MatchListener>();
		this.matchlistener.add(this);
	    this.points = new HashMap<Competitor, Integer>() ;
	    Iterator<Competitor> ite = lc.iterator() ;
	    while(ite.hasNext()){
	      this.points.put(ite.next(), 0) ;
	    }
	}

	/**
	 * This is the constructor for the class Competition.
	 * @param lc : the list of competitors
	 * @param matchListener : the list of matchListener
	 */
	public Competition(List<Competitor> lc, ArrayList<MatchListener> matchListener){
		this(lc);
		this.matchlistener=matchListener;
	}

	/**
	 * Add a Listener to the List of listener
	 * @param matchListener
	 */
	public void addListener(MatchListener matchListener) {
		this.matchlistener.add(matchListener);
	}

	/**
	 * Remove a Listener to the List of listener
	 * @param matchListener
	 */
	public void rmListener(MatchListener matchListener) {
		this.matchlistener.remove(matchListener);
	}

	/**
	 * The consequences we apply when a match happen
	 * @param me : the matchevent we apply the consequences
	 */
	public void MatchEnded(MatchEvent me){
		addPoint(me.getWinner());
	}

	/**
	 * return the number of points a competitor have
	 * @param  : the competitor
	 * @return : the number of points
	 */
	  public int getPointOfCompetitor(Competitor c){
	    return this.points.get(c) ;
	  }

		/**
		 * add 1 point to the competitor
		 * @param  : the competitor
		 */
	  public void addPoint(Competitor c){
	    Integer point = this.getPointOfCompetitor(c) ;
	    this.points.put(c,point+1);
	  }


	/**
	 * return the map of competitors, with their points, who take part of the competition
	 * @return Map<Competitor, Integer>
	 */
	public Map<Competitor, Integer> getCompetitorsMap(){
		return this.points ;
	}


	/**
	 * return the list of competitors who take part of the competition
	 * @return List<Competitor>
	 */
	public List<Competitor> getCompetitors(){
		return this.competitors ;
	}

	/**
	 * return match of competition
	 * @return Match
	 */
	public Match getMatch(){
		return this.match ;
	}

	/**
	 * abstract method play , base to other competition
	 *
	 * @throws listSizeException
	 */
	public abstract void play() throws listSizeException;

	/**
	 * it displays the ranking, with player name and player points, ordered by points.
	 */
	public void displayRanking(){
		System.out.println("*** RANKING ***") ;

		this.points = MapUtil.sortByDescendingValue(this.points) ;
		for (Entry<Competitor, Integer> m : this.points.entrySet()){
			System.out.println(m.getKey().getName() + " --- " + m.getValue()) ;
		}


	}



}
