package jeu ;

/**
 * This class represent a matchEvent with the winner and the loser of a match
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 3.0
 */
public class MatchEvent {

  /**
	 * the winner of the match
	 */
  private Competitor winner ;

  /**
	 * the loser of the match
	 */
  private Competitor loser ;

  /**
	 * The constructor
	 */
  public MatchEvent(Competitor c1, Competitor c2){
    this.winner = c1 ;
    this.loser = c2 ;
  }

  /**
   * @return the winner
	 */
  public Competitor getWinner(){
    return this.winner ;
  }

  /**
   * @return the loser
	 */
  public Competitor getLoser(){
    return this.loser ;
  }

}
