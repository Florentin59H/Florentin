package util;


/**
 * This class represent size exception about the list of competitors
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 1.0
 */
public class listSizeException extends Exception {
  /**
  *Display an error message.
  *@param the message we will display in case there is a problem.
  *
  */
  public listSizeException(String message){
    super(message) ;
  }
}
