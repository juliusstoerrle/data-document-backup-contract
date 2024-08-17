# Data Document Backup Contract Library

This library contains the minimum code to be included in a downstream project when using the worker component for handling CreateDocument commands.

## Using with Symfony Messenger & the worker component

Include the library into your project and configure your symfony/messenger to route CreateDocument messages to your preferred queue.

Use the CreateDocument command to gather all details required to generate a document and provide it to the message bus.

