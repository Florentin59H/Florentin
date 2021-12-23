package jeu ;

/**
*
* This class represents a Journalist. It implements from MatchListener class.
*
*@author Havart Florentin - Bugnon Florentin
*@version 3.0
 */
public class Journalist implements MatchListener {
  /**
  * the name of the journalist
   */
  private String name;


  /**
  * init the journalist with his name
  * @param n : the name
   */
  public Journalist( String n){
    this.name = n ;
  }

  /**
  * return the name of the journalist
  * @return the name (String)
   */
  public String getName(){
    return this.name ;
  }

  /**
  * Display the result of a Match
  * @param me : the MatchEvent
   */
  public void MatchEnded(MatchEvent me){
    System.out.println(this.getName() + " : " + me.getWinner().getName() + " wins this game against " + me.getLoser().getName()) ;

  }






}
