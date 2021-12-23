package jeu ;
import java.util.* ;

/*
 *  this class reprensents a bookmaker , they change odds of competitor during competition
 *  @author Havart Florentin - Bugnon Florentin
 *  @version 3.0
 **/
public class Bookmaker implements MatchListener {

	/*
	 * Map of competitor and their odds
	 * */
  private Map<Competitor, Integer> odds ;

  /*
   * create hashMap of competitor/odds  and initializes odds to 2
   * @param List<Competitor> competitor in competition
   * */
  public Bookmaker(List<Competitor> lc){

    this.odds = new HashMap<Competitor, Integer>() ;
    Iterator<Competitor> ite = lc.iterator() ;
    while(ite.hasNext()){
      this.odds.put(ite.next(), 2) ;
    }
  }

  /**
   * Return the map of competitors / odds
   * @return Map<Competitor, Integer>
   * */
  public Map<Competitor, Integer> getOdds(){
    return this.odds ;
  }

  /**
   * Return the odds of a competitor
   * @return the odds (int)
   * */
  public int getOddsOfCompetitor(Competitor c){
    return this.odds.get(c) ;
  }

  /**
   *add +1 to the competitor's odds
   *@param c
   * */
  public void oddsUp(Competitor c){
    Integer cote = this.getOddsOfCompetitor(c) ;
    this.odds.put(c,cote+1) ;
  }

  /**
   * add -1 to the competitor's odds
   *@param c
   * */
  public void oddsDown(Competitor c){
    Integer cote = this.getOddsOfCompetitor(c) ;
    this.odds.put(c,cote-1) ;
  }

  /**
   * @param me
   * We update the odds of the competitors. +1 if they lose, -1 if they win. Then, it displays new odds.
   * */
  public void MatchEnded(MatchEvent me){
    Integer oddsBeforeMatchC1 = this.getOddsOfCompetitor(me.getWinner()) ;
    Integer oddsBeforeMatchC2 = this.getOddsOfCompetitor(me.getLoser()) ;
    if (oddsBeforeMatchC1 == 1){
      System.out.println(me.getWinner().getName() + " (odds " + oddsBeforeMatchC1 + " ) wins against " + me.getLoser().getName() + " (odds " + oddsBeforeMatchC2 + ")" );
      System.out.println(me.getWinner().getName() + "'s odds stay at 1(the best odds)" ) ;
      System.out.println(me.getLoser().getName() + "'s odds is now " + (oddsBeforeMatchC2+1) ) ;
      this.oddsUp(me.getLoser()) ;
    }
    else{
            System.out.println(me.getWinner().getName() + " (odds " + oddsBeforeMatchC1 + " ) wins against " + me.getLoser().getName() + " (odds " + oddsBeforeMatchC2 + ")" ) ;
            System.out.println(me.getWinner().getName() + "'s odds is now " + (oddsBeforeMatchC1-1) ) ;
            System.out.println(me.getLoser().getName() + "'s odds is now " + (oddsBeforeMatchC2+1) ) ;
            this.oddsUp(me.getLoser()) ;
            this.oddsDown(me.getWinner()) ;
    }
  }




}
