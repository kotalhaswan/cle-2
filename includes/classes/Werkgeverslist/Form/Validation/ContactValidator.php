<?php namespace Werkgeverslist\Form\Validation;
use Werkgeverslist\Contacts\Contact;
use Werkgeverslist\Contacts\Contacting;
/**
 * Class AlbumValidator
 * @package System\Form\Validation
 */
class ContactValidator implements Validator
{
    private array $errors = [];

    /**
     * AlbumValidator constructor.
     *
     * @param Contacting $contact
     */
    public function __construct(private readonly Contacting $contact)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Check if data is valid & generate error if not so
        if ($this->contact->naam == '') {
            $this->errors[] = 'Naam mag niet leeg zijn';
        }
        if ($this->contact->email == '') {
            $this->errors[] = 'Email mag niet leeg zijn';
        }
        if ($this->contact->telefoonnummer == '') {
            $this->errors[] = 'Telefoonnummer mag niet leeg zijn';
        }
        if ($this->contact->woonplaats == '') {
            $this->errors[] = 'Woonplaats mag niet leeg zijn';
        }
        if ($this->contact->reden == '') {
            $this->errors[] = 'Reden mag niet leeg zijn';
        }
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}