<?php
namespace emielLiefhebber\seoplugin\components;

use Cms\Classes\ComponentBase;

class KeyPhrasecheck extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'KeyPhrasecheck',
            'description' => 'This component checks for keyphrases'
        ];
    }

    public function onRender()
    {
        // Check if the ViewBag is not null and the seo_keyphrase property exists
        if ($this->page->viewBag !== null && isset($this->page->viewBag->seo_keyphrase)) {
            // Retrieve the keyphrase from the ViewBag
            $keyphrase = $this->page->viewBag->seo_keyphrase;

            // Retrieve the content of the page
            $content = $this->page->content;

            // Calculate the keyphrase density
            $keyphraseCount = substr_count($content, $keyphrase);
            $wordCount = str_word_count($content);
            $keyphraseDensity = ($keyphraseCount / $wordCount) * 100;

            echo "The keyphrase density for '{$keyphrase}' is {$keyphraseDensity}%.";

            // Check if the keyphrase consists of function words only
            $functionWords = ['the', 'and', 'but', 'absolutely'];
            $keyphraseWords = explode(' ', strtolower($keyphrase));
            $containsOnlyFunctionWords = true;

            foreach ($keyphraseWords as $word) {
                if (!in_array($word, $functionWords)) {
                    $containsOnlyFunctionWords = false;
                    break;
                }
            }

            if ($containsOnlyFunctionWords) {
                echo "Warning: Your keyphrase consists of function words only.";
            }

            // Retrieve the keyphrases from the session
            $keyphrases = session()->get('keyphrases', []);

            // Check if the keyphrase already exists in the array
            if (in_array($keyphrase, $keyphrases)) {
                echo "The keyphrase '{$keyphrase}' already exists.";
            } else {
                // If the keyphrase is unique, add it to the array
                $keyphrases[] = $keyphrase;
                // Store the updated keyphrases in the session
                session()->put('keyphrases', $keyphrases);
                echo "The keyphrase '{$keyphrase}' is unique.";
            }
        } elseif ($this->page->viewBag === null) {
            echo "The ViewBag is not available.";
        } else {
            echo "The property 'seo_keyphrase' does not exist in the ViewBag.";
        }
    }
}
?>
