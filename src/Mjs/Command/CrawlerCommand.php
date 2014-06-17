<?php

namespace Mjs\Command;

use Goutte\Client;
use Mjs\Entity\Link;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerCommand extends Command
{
	protected function configure()
	{
		$this->setName('crawler:execute')
			->setDescription('Execute the next crawl');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		// get first link - equally distributed timed across domains / ip addresses

		$link = new Link('http://www.warwickwarp.com');

		// get link
		$client = new Client();
		/** @var Crawler $crawler */
		$crawler = $client->request('GET', $link->getUri());

		// search for images
		/** @var Crawler $node */
		$crawler->filter('img')->each(function($node) use ($output) {

			$output->writeln($node->text());
		});

		// search for other links


		$output->writeln('Executing');
	}
} 