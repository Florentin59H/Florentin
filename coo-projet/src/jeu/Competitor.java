package jeu ;



/**
 * This class represents a competitor.
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 3.0
 */
public class Competitor {

	/**
	 * The name of the competitor
	 */
	private String name ;


	/**
	* The constructor for a competitor.
	*
	* @param name
	*/
	public Competitor(String name){
		this.name = name ;
	}

	/**
	 * @return the name of the competitor. (String)
	 */
	public String getName(){
		return this.name ;
	}


	/**
	 *	Compare 2 competitor based on their name.
	 *
	 * @return the equality between two objects competitor. (boolean)
	 */
	public boolean equals (Object o) {
		if (o instanceof Competitor) {
			Competitor other = (Competitor) o;
			return ( this.name == other.name ) ;
		}
		else
			return false ;
	}




}
